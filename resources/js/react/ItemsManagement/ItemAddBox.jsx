import React, {useState, useEffect} from 'react';
import axios from 'axios';

const ItemAddBox = ({children, inputRef, setSuccessResponse}) => {
    const [value, setValue] = useState('');

    useEffect(() => {
        if (!value) return;
        axios.post(`${api_url}/items-management/store`, {name: value}).then(({data}) => {
            setSuccessResponse(data);
            inputRef.current.value = '';
        });
    }, [value]);

    return (
        <form onSubmit={e => e.preventDefault()}>
            <div className="form-group item-add-box">
                <input ref={inputRef} type="text" required maxLength="50" className="form-control" defaultValue="" placeholder="Enter Item and Click Add" />
                <button type="submit" className="btn btn-primary" onClick={e => setValue(inputRef.current.value.trim())}>Add</button>

                {children}
            </div>
        </form>
    );
};

export default ItemAddBox;
