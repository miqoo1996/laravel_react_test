import React from 'react';
import ReactDOM from 'react-dom';
import './App.scss';
import ItemsManagement from './ItemsManagement/app'

const App = () => {
    return (
        <ItemsManagement title="Items Management Page" />
    );
};

ReactDOM.render(
    <App />,
    document.getElementById('root')
);
