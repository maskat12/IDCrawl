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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

$(document).ready(function () {

  var dataObject = [{
    id: 1,
    flag: 'EUR',
    currencyCode: 'EUR',
    currency: 'Euro',
    level: 0.9033,
    units: 'EUR / USD',
    asOf: '08/19/2018',
    onedChng: 0.0026
  }, {
    id: 2,
    flag: 'JPY',
    currencyCode: 'JPY',
    currency: 'Japanese Yen',
    level: 124.3870,
    units: 'JPY / USD',
    asOf: '08/19/2018',
    onedChng: 0.0001
  }, {
    id: 3,
    flag: 'GBP',
    currencyCode: 'GBP',
    currency: 'Pound Sterling',
    level: 0.6396,
    units: 'GBP / USD',
    asOf: '08/19/2018',
    onedChng: 0.00
  }, {
    id: 4,
    flag: 'CHF',
    currencyCode: 'CHF',
    currency: 'Swiss Franc',
    level: 0.9775,
    units: 'CHF / USD',
    asOf: '08/19/2018',
    onedChng: 0.0008
  }, {
    id: 5,
    flag: 'CAD',
    currencyCode: 'CAD',
    currency: 'Canadian Dollar',
    level: 1.3097,
    units: 'CAD / USD',
    asOf: '08/19/2018',
    onedChng: -0.0005
  }, {
    id: 6,
    flag: 'AUD',
    currencyCode: 'AUD',
    currency: 'Australian Dollar',
    level: 1.3589,
    units: 'AUD / USD',
    asOf: '08/19/2018',
    onedChng: 0.0020
  }, {
    id: 7,
    flag: 'NZD',
    currencyCode: 'NZD',
    currency: 'New Zealand Dollar',
    level: 1.5218,
    units: 'NZD / USD',
    asOf: '08/19/2018',
    onedChng: -0.0036
  }, {
    id: 8,
    flag: 'SEK',
    currencyCode: 'SEK',
    currency: 'Swedish Krona',
    level: 8.5280,
    units: 'SEK / USD',
    asOf: '08/19/2018',
    onedChng: 0.0016
  }, {
    id: 9,
    flag: 'NOK',
    currencyCode: 'NOK',
    currency: 'Norwegian Krone',
    level: 8.2433,
    units: 'NOK / USD',
    asOf: '08/19/2018',
    onedChng: 0.0008
  }, {
    id: 10,
    flag: 'BRL',
    currencyCode: 'BRL',
    currency: 'Brazilian Real',
    level: 3.4806,
    units: 'BRL / USD',
    asOf: '08/19/2018',
    onedChng: -0.0009
  }, {
    id: 11,
    flag: 'CNY',
    currencyCode: 'CNY',
    currency: 'Chinese Yuan',
    level: 6.3961,
    units: 'CNY / USD',
    asOf: '08/19/2018',
    onedChng: 0.0004
  }, {
    id: 12,
    flag: 'RUB',
    currencyCode: 'RUB',
    currency: 'Russian Rouble',
    level: 65.5980,
    units: 'RUB / USD',
    asOf: '08/19/2018',
    onedChng: 0.0059
  }, {
    id: 13,
    flag: 'INR',
    currencyCode: 'INR',
    currency: 'Indian Rupee',
    level: 65.3724,
    units: 'INR / USD',
    asOf: '08/19/2018',
    onedChng: 0.0026
  }, {
    id: 14,
    flag: 'TRY',
    currencyCode: 'TRY',
    currency: 'New Turkish Lira',
    level: 2.8689,
    units: 'TRY / USD',
    asOf: '08/19/2018',
    onedChng: 0.0092
  }, {
    id: 15,
    flag: 'THB',
    currencyCode: 'THB',
    currency: 'Thai Baht',
    level: 35.5029,
    units: 'THB / USD',
    asOf: '08/19/2018',
    onedChng: 0.0044
  }, {
    id: 16,
    flag: 'IDR',
    currencyCode: 'IDR',
    currency: 'Indonesian Rupiah',
    level: 13.83,
    units: 'IDR / USD',
    asOf: '08/19/2018',
    onedChng: -0.0009
  }, {
    id: 17,
    flag: 'MYR',
    currencyCode: 'MYR',
    currency: 'Malaysian Ringgit',
    level: 4.0949,
    units: 'MYR / USD',
    asOf: '08/19/2018',
    onedChng: 0.0010
  }, {
    id: 18,
    flag: 'MXN',
    currencyCode: 'MXN',
    currency: 'Mexican New Peso',
    level: 16.4309,
    units: 'MXN / USD',
    asOf: '08/19/2018',
    onedChng: 0.0017
  }, {
    id: 19,
    flag: 'ARS',
    currencyCode: 'ARS',
    currency: 'Argentinian Peso',
    level: 9.2534,
    units: 'ARS / USD',
    asOf: '08/19/2018',
    onedChng: 0.0011
  }, {
    id: 20,
    flag: 'DKK',
    currencyCode: 'DKK',
    currency: 'Danish Krone',
    level: 6.7417,
    units: 'DKK / USD',
    asOf: '08/19/2018',
    onedChng: 0.0025
  }, {
    id: 21,
    flag: 'ILS',
    currencyCode: 'ILS',
    currency: 'Israeli New Sheqel',
    level: 3.8262,
    units: 'ILS / USD',
    asOf: '08/19/2018',
    onedChng: 0.0084
  }, {
    id: 22,
    flag: 'PHP',
    currencyCode: 'PHP',
    currency: 'Philippine Peso',
    level: 46.3108,
    units: 'PHP / USD',
    asOf: '08/19/2018',
    onedChng: 0.0012
  }];
  var currencyCodes = ['EUR', 'JPY', 'GBP', 'CHF', 'CAD', 'AUD', 'NZD', 'SEK', 'NOK', 'BRL', 'CNY', 'RUB', 'INR', 'TRY', 'THB', 'IDR', 'MYR', 'MXN', 'ARS', 'DKK', 'ILS', 'PHP'];
  var flagRenderer = function flagRenderer(instance, td, row, col, prop, value, cellProperties) {
    var currencyCode = value;
    while (td.firstChild) {
      td.removeChild(td.firstChild);
    }
    if (currencyCodes.indexOf(currencyCode) > -1) {
      var flagElement = document.createElement('DIV');
      flagElement.className = 'flag ' + currencyCode.toLowerCase();
      td.appendChild(flagElement);
    } else {
      var textNode = document.createTextNode(value === null ? '' : value);

      td.appendChild(textNode);
    }
  };
  var hotSettings = {
    data: dataObject,
    columns: [{
      data: 'id',
      type: 'numeric',
      width: 40,
      editor: false
    }, {
      data: 'flag',
      renderer: flagRenderer,
      editor: false
    }, {
      data: 'currencyCode',
      type: 'text',
      editor: false
    }, {
      data: 'currency',
      type: 'text',
      editor: false
    }, {
      data: 'level',
      type: 'numeric',
      numericFormat: {
        pattern: '0.0000'
      },
      editor: false
    }, {
      data: 'units',
      type: 'text',
      editor: false
    }, {
      data: 'asOf',
      type: 'date',
      dateFormat: 'MM/DD/YYYY',
      editor: false
    }, {
      data: 'onedChng',
      type: 'numeric',
      numericFormat: {
        pattern: '0.00%'
      },
      editor: false
    }],
    stretchH: 'all',
    autoWrapRow: true,
    height: 500,
    manualRowResize: false,
    manualColumnResize: false,
    rowHeaders: true,
    colHeaders: ['ID', 'Country', 'Code', 'Currency', 'Level', 'Units', 'Date', 'Change'],
    manualRowMove: false,
    manualColumnMove: true,
    filters: true,
    dropdownMenu: true,
    columnSorting: true,
    sortIndicator: true,
    autoColumnSize: {
      samplingRatio: 23
    },
    contextMenu: true
  };
  if ($('#table-container').length) {
    var container = document.getElementById('table-container');
    var hot = new Handsontable(container, hotSettings);
  }

  $('.slick-1').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false
  });
});

/***/ })

/******/ });