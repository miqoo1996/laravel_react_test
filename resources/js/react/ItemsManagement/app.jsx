import React, {useRef, useState} from 'react';
import ItemAddBox from './ItemAddBox';
import ItemsContent from './ItemsContent';

const App = ({title}) => {
    const [successResponse, setSuccessResponse] = useState([]);
    const inputItemAddRef = useRef(null);

    return (
        <section id="items-management">
            <h1 className="page-title">{title}</h1>

            <div className="items-container">
                <ItemsContent successResponse={successResponse}>
                    <ItemAddBox inputRef={inputItemAddRef} setSuccessResponse={setSuccessResponse}>
                        {/* You can add something here */}
                    </ItemAddBox>
                </ItemsContent>
            </div>
        </section>
    );
};

export default App;
