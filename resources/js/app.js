import './bootstrap';
import '../css/app.css';
import {App} from '@inertiajs/react';
import React from 'react';
import {render} from 'react-dom'

const Pro = document.getElementById('profile')

render(
    <App
        initialPage={JSON.parse(Pro.dataset.page)}
        resolveComponent={name => require(`./Pages/${name}.jsx`).default}
    />,
    Pro
)


