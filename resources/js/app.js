import './bootstrap';
import 'flowbite'
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const tabElements = [
    { id: 'infos-tab', triggerEl: document.querySelector('#infos-tab'), targetEl: document.querySelector('#infos') },
    { id: 'stats-tab', triggerEl: document.querySelector('#stats-tab'), targetEl: document.querySelector('#stats') },
    { id: 'attaques-tab', triggerEl: document.querySelector('#attaques-tab'), targetEl: document.querySelector('#attaques') },
    { id: 'competences-tab', triggerEl: document.querySelector('#competences-tab'), targetEl: document.querySelector('#competences') },
    { id: 'origine-tab', triggerEl: document.querySelector('#origine-tab'), targetEl: document.querySelector('#origine') }
];

// const tabs = new Tabs(tabElements, options);
// tabs.show('infos-tab')
