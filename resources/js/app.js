import './bootstrap';

import Alpine from 'alpinejs';
import { Tabs } from "flowbite";

window.Alpine = Alpine;

Alpine.start();

const tabElements = [
    { id: 'infos-tab', triggerEl: document.querySelector('#infos-tab'), targetEl: document.querySelector('#infos') },
    { id: 'stats-tab', triggerEl: document.querySelector('#stats-tab'), targetEl: document.querySelector('#stats') },
    { id: 'attaques-tab', triggerEl: document.querySelector('#attaques-tab'), targetEl: document.querySelector('#attaques') },
    { id: 'maitrises-tab', triggerEl: document.querySelector('#maitrises-tab'), targetEl: document.querySelector('#maitrises') },
    { id: 'origine-tab', triggerEl: document.querySelector('#origine-tab'), targetEl: document.querySelector('#origine') }
];

const options = {
    defaultTabId: 'settings',
    activeClasses: 'text-red-700 hover:text-red-700 dark:text-red-700 dark:hover:text-red-700 border-red-700 dark:border-red-700',
    inactiveClasses: 'text-gray-500',
};

const tabs = new Tabs(tabElements, options);
tabs.show('attaques-tab')
