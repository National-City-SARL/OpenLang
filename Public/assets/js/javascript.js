/*-----------------------------------*\
  #Javascript.js
\*-----------------------------------*/

/**
* copyright 2024
*/

/**
* @param {Type_de_element} Nom_element - commentaire sur l'element
*/

/**
 * loading
 */

const loadingElement = document.querySelector("[data-loading-container]");

window.addEventListener("load", function () {
  loadingElement.classList.add("loaded");
  document.body.classList.add("loaded");
});