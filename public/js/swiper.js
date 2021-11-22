/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/swiper.js":
/*!********************************!*\
  !*** ./resources/js/swiper.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var swiper = new Swiper('.swiper-container', {\n  // Optional parameters\n  loop: true,\n  // If we need pagination\n  pagination: {\n    el: '.swiper-pagination'\n  },\n  // Navigation arrows\n  navigation: {\n    nextEl: '.swiper-button-next',\n    prevEl: '.swiper-button-prev'\n  },\n  breakpoints: {\n    600: {\n      centeredSlides: true,\n      slidesPerView: 1.2\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc3dpcGVyLmpzPzQwMWUiXSwibmFtZXMiOlsic3dpcGVyIiwiU3dpcGVyIiwibG9vcCIsInBhZ2luYXRpb24iLCJlbCIsIm5hdmlnYXRpb24iLCJuZXh0RWwiLCJwcmV2RWwiLCJicmVha3BvaW50cyIsImNlbnRlcmVkU2xpZGVzIiwic2xpZGVzUGVyVmlldyJdLCJtYXBwaW5ncyI6IkFBRUEsSUFBSUEsTUFBTSxHQUFHLElBQUlDLE1BQUosQ0FBVyxtQkFBWCxFQUFnQztBQUMzQztBQUNBQyxNQUFJLEVBQUUsSUFGcUM7QUFHM0M7QUFDQUMsWUFBVSxFQUFFO0FBQ1ZDLE1BQUUsRUFBRTtBQURNLEdBSitCO0FBTzNDO0FBQ0FDLFlBQVUsRUFBRTtBQUNWQyxVQUFNLEVBQUUscUJBREU7QUFFVkMsVUFBTSxFQUFFO0FBRkUsR0FSK0I7QUFhM0NDLGFBQVcsRUFBRTtBQUNYLFNBQUs7QUFDSEMsb0JBQWMsRUFBQyxJQURaO0FBRUhDLG1CQUFhLEVBQUM7QUFGWDtBQURNO0FBYjhCLENBQWhDLENBQWIiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc3dpcGVyLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXG5cbnZhciBzd2lwZXIgPSBuZXcgU3dpcGVyKCcuc3dpcGVyLWNvbnRhaW5lcicsIHtcbiAgLy8gT3B0aW9uYWwgcGFyYW1ldGVyc1xuICBsb29wOiB0cnVlLFxuICAvLyBJZiB3ZSBuZWVkIHBhZ2luYXRpb25cbiAgcGFnaW5hdGlvbjoge1xuICAgIGVsOiAnLnN3aXBlci1wYWdpbmF0aW9uJyxcbiAgfSxcbiAgLy8gTmF2aWdhdGlvbiBhcnJvd3NcbiAgbmF2aWdhdGlvbjoge1xuICAgIG5leHRFbDogJy5zd2lwZXItYnV0dG9uLW5leHQnLFxuICAgIHByZXZFbDogJy5zd2lwZXItYnV0dG9uLXByZXYnLFxuICB9LFxuXG4gIGJyZWFrcG9pbnRzOiB7XG4gICAgNjAwOiB7XG4gICAgICBjZW50ZXJlZFNsaWRlczp0cnVlLFxuICAgICAgc2xpZGVzUGVyVmlldzoxLjIsXG4gICAgfSxcbiAgfVxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/swiper.js\n");

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/swiper.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/laravel_op/scout/resources/js/swiper.js */"./resources/js/swiper.js");


/***/ })

/******/ });