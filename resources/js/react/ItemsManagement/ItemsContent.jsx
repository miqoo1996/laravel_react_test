import React, {useState, useEffect} from 'react';
import axios from "axios";

const ItemsContent = ({children, successResponse}) => {
    const [leftItems, setLeftItems] = useState([]);
    const [rightItems, setRightItems] = useState([]);

    const [leftSelectedOption, setLOption] = useState(null);
    const [rightSelectedOption, setROption] = useState(null);

    const updateItems = async () => {
        const {data} = await axios.get(`${api_url}/items-management`);

        let lItems = [];
        let rItems = [];

        data.map(value => {
            if (value.status === 0) {
                lItems.push(value.name);
            } else if (value.status === 1) {
                rItems.push(value.name);
            }
        });

        setLeftItems(lItems);
        setRightItems(rItems);
    }

    const changePosition = async status => {
        let name = null;

        if (status === 0) {
            name = rightSelectedOption;
        } else if (status === 1) {
            name = leftSelectedOption;
        }

        if (!name) return false;

        await axios.post(`${api_url}/items-management/store`, {name, status});

        updateItems();
    }

    useEffect(() => {
        updateItems();
    }, [successResponse]);

    return (
        <div className="items-content">
            {children}

            <div className="row select-groups">
                <div className="col-md-5">
                    <select multiple className="form-control" size="10" onChange={e => setLOption(e.target.value)}>
                        {leftItems.map(value => {
                            return <option key={value} value={value}>{value}</option>;
                        })}
                    </select>
                </div>
                <div className="col-md-2 text-center">
                    <button className="btn btn-secondary pull-left" onClick={e => changePosition(0)}>
                        <i className="fa fa-arrow-left"/>
                    </button>
                    <button className="btn btn-secondary pull-right" onClick={e => changePosition(1)}>
                        <i className="fa fa-arrow-right"/>
                    </button>
                </div>
                <div className="col-md-5">
                    <select multiple className="form-control" size="10" onChange={e => setROption(e.target.value)}>
                        {rightItems.map(value => {
                            return <option key={value} value={value}>{value}</option>;
                        })}
                    </select>
                </div>
            </div>
        </div>
    );
};

export default ItemsContent;
