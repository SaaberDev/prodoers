/*
* Meta ServiceTag Input
* Add Service Page
* */
// The DOM element you wish to replace with Tagify
const input = document.querySelector('input[name=tags]');
// initialize Tagify on the above input node reference
new Tagify(input, {
    pattern             : /^[^\W_]{3,48}$/,
    delimiters          : ",| ",
});

// var input = document.querySelector('input[name=tags2]');
// // initialize Tagify on the above input node reference
// new Tagify(input);
