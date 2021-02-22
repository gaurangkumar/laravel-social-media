/*!
	autosize 4.0.2
	license: MIT
	http://www.jacklmoore.com/autosize
*/
!function(e,t){if("function"==typeof define&&define.amd)define(["module","exports"],t);else if("undefined"!=typeof exports)t(module,exports);else{var n={exports:{}};t(n,n.exports),e.autosize=n.exports}}(this,function(e,t){"use strict";var n,o,p="function"==typeof Map?new Map:(n=[],o=[],{has:function(e){return-1<n.indexOf(e)},get:function(e){return o[n.indexOf(e)]},set:function(e,t){-1===n.indexOf(e)&&(n.push(e),o.push(t))},delete:function(e){var t=n.indexOf(e);-1<t&&(n.splice(t,1),o.splice(t,1))}}),c=function(e){return new Event(e,{bubbles:!0})};try{new Event("test")}catch(e){c=function(e){var t=document.createEvent("Event");return t.initEvent(e,!0,!1),t}}function r(r){if(r&&r.nodeName&&"TEXTAREA"===r.nodeName&&!p.has(r)){var e,n=null,o=null,i=null,d=function(){r.clientWidth!==o&&a()},l=function(t){window.removeEventListener("resize",d,!1),r.removeEventListener("input",a,!1),r.removeEventListener("keyup",a,!1),r.removeEventListener("autosize:destroy",l,!1),r.removeEventListener("autosize:update",a,!1),Object.keys(t).forEach(function(e){r.style[e]=t[e]}),p.delete(r)}.bind(r,{height:r.style.height,resize:r.style.resize,overflowY:r.style.overflowY,overflowX:r.style.overflowX,wordWrap:r.style.wordWrap});r.addEventListener("autosize:destroy",l,!1),"onpropertychange"in r&&"oninput"in r&&r.addEventListener("keyup",a,!1),window.addEventListener("resize",d,!1),r.addEventListener("input",a,!1),r.addEventListener("autosize:update",a,!1),r.style.overflowX="hidden",r.style.wordWrap="break-word",p.set(r,{destroy:l,update:a}),"vertical"===(e=window.getComputedStyle(r,null)).resize?r.style.resize="none":"both"===e.resize&&(r.style.resize="horizontal"),n="content-box"===e.boxSizing?-(parseFloat(e.paddingTop)+parseFloat(e.paddingBottom)):parseFloat(e.borderTopWidth)+parseFloat(e.borderBottomWidth),isNaN(n)&&(n=0),a()}function s(e){var t=r.style.width;r.style.width="0px",r.offsetWidth,r.style.width=t,r.style.overflowY=e}function u(){if(0!==r.scrollHeight){var e=function(e){for(var t=[];e&&e.parentNode&&e.parentNode instanceof Element;)e.parentNode.scrollTop&&t.push({node:e.parentNode,scrollTop:e.parentNode.scrollTop}),e=e.parentNode;return t}(r),t=document.documentElement&&document.documentElement.scrollTop;r.style.height="",r.style.height=r.scrollHeight+n+"px",o=r.clientWidth,e.forEach(function(e){e.node.scrollTop=e.scrollTop}),t&&(document.documentElement.scrollTop=t)}}function a(){u();var e=Math.round(parseFloat(r.style.height)),t=window.getComputedStyle(r,null),n="content-box"===t.boxSizing?Math.round(parseFloat(t.height)):r.offsetHeight;if(n<e?"hidden"===t.overflowY&&(s("scroll"),u(),n="content-box"===t.boxSizing?Math.round(parseFloat(window.getComputedStyle(r,null).height)):r.offsetHeight):"hidden"!==t.overflowY&&(s("hidden"),u(),n="content-box"===t.boxSizing?Math.round(parseFloat(window.getComputedStyle(r,null).height)):r.offsetHeight),i!==n){i=n;var o=c("autosize:resized");try{r.dispatchEvent(o)}catch(e){}}}}function i(e){var t=p.get(e);t&&t.destroy()}function d(e){var t=p.get(e);t&&t.update()}var l=null;"undefined"==typeof window||"function"!=typeof window.getComputedStyle?((l=function(e){return e}).destroy=function(e){return e},l.update=function(e){return e}):((l=function(e,t){return e&&Array.prototype.forEach.call(e.length?e:[e],function(e){return r(e)}),e}).destroy=function(e){return e&&Array.prototype.forEach.call(e.length?e:[e],i),e},l.update=function(e){return e&&Array.prototype.forEach.call(e.length?e:[e],d),e}),t.default=l,e.exports=t.default});
"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/*
 *
 * More info at [www.dropzonejs.com](http://www.dropzonejs.com)
 *
 * Copyright (c) 2012, Matias Meno
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

// The Emitter class provides the ability to call `.on()` on Dropzone to listen
// to events.
// It is strongly based on component's emitter class, and I removed the
// functionality because of the dependency hell with different frameworks.
var Emitter = function () {
  function Emitter() {
    _classCallCheck(this, Emitter);
  }

  _createClass(Emitter, [{
    key: "on",

    // Add an event listener for given event
    value: function on(event, fn) {
      this._callbacks = this._callbacks || {};
      // Create namespace for this event
      if (!this._callbacks[event]) {
        this._callbacks[event] = [];
      }
      this._callbacks[event].push(fn);
      return this;
    }
  }, {
    key: "emit",
    value: function emit(event) {
      this._callbacks = this._callbacks || {};
      var callbacks = this._callbacks[event];

      if (callbacks) {
        for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
          args[_key - 1] = arguments[_key];
        }

        for (var _iterator = callbacks, _isArray = true, _i = 0, _iterator = _isArray ? _iterator : _iterator[Symbol.iterator]();;) {
          var _ref;

          if (_isArray) {
            if (_i >= _iterator.length) break;
            _ref = _iterator[_i++];
          } else {
            _i = _iterator.next();
            if (_i.done) break;
            _ref = _i.value;
          }

          var callback = _ref;

          callback.apply(this, args);
        }
      }

      return this;
    }

    // Remove event listener for given event. If fn is not provided, all event
    // listeners for that event will be removed. If neither is provided, all
    // event listeners will be removed.

  }, {
    key: "off",
    value: function off(event, fn) {
      if (!this._callbacks || arguments.length === 0) {
        this._callbacks = {};
        return this;
      }

      // specific event
      var callbacks = this._callbacks[event];
      if (!callbacks) {
        return this;
      }

      // remove all handlers
      if (arguments.length === 1) {
        delete this._callbacks[event];
        return this;
      }

      // remove specific handler
      for (var i = 0; i < callbacks.length; i++) {
        var callback = callbacks[i];
        if (callback === fn) {
          callbacks.splice(i, 1);
          break;
        }
      }

      return this;
    }
  }]);

  return Emitter;
}();

var Dropzone = function (_Emitter) {
  _inherits(Dropzone, _Emitter);

  _createClass(Dropzone, null, [{
    key: "initClass",
    value: function initClass() {

      // Exposing the emitter class, mainly for tests
      this.prototype.Emitter = Emitter;

      /*
       This is a list of all available events you can register on a dropzone object.
        You can register an event handler like this:
        dropzone.on("dragEnter", function() { });
        */
      this.prototype.events = ["drop", "dragstart", "dragend", "dragenter", "dragover", "dragleave", "addedfile", "addedfiles", "removedfile", "thumbnail", "error", "errormultiple", "processing", "processingmultiple", "uploadprogress", "totaluploadprogress", "sending", "sendingmultiple", "success", "successmultiple", "canceled", "canceledmultiple", "complete", "completemultiple", "reset", "maxfilesexceeded", "maxfilesreached", "queuecomplete"];

      this.prototype.defaultOptions = {
        /**
         * Has to be specified on elements other than form (or when the form
         * doesn't have an `action` attribute). You can also
         * provide a function that will be called with `files` and
         * must return the url (since `v3.12.0`)
         */
        url: null,

        /**
         * Can be changed to `"put"` if necessary. You can also provide a function
         * that will be called with `files` and must return the method (since `v3.12.0`).
         */
        method: "post",

        /**
         * Will be set on the XHRequest.
         */
        withCredentials: false,

        /**
         * The timeout for the XHR requests in milliseconds (since `v4.4.0`).
         */
        timeout: 30000,

        /**
         * How many file uploads to process in parallel (See the
         * Enqueuing file uploads* documentation section for more info)
         */
        parallelUploads: 2,

        /**
         * Whether to send multiple files in one request. If
         * this it set to true, then the fallback file input element will
         * have the `multiple` attribute as well. This option will
         * also trigger additional events (like `processingmultiple`). See the events
         * documentation section for more information.
         */
        uploadMultiple: false,

        /**
         * Whether you want files to be uploaded in chunks to your server. This can't be
         * used in combination with `uploadMultiple`.
         *
         * See [chunksUploaded](#config-chunksUploaded) for the callback to finalise an upload.
         */
        chunking: false,

        /**
         * If `chunking` is enabled, this defines whether **every** file should be chunked,
         * even if the file size is below chunkSize. This means, that the additional chunk
         * form data will be submitted and the `chunksUploaded` callback will be invoked.
         */
        forceChunking: false,

        /**
         * If `chunking` is `true`, then this defines the chunk size in bytes.
         */
        chunkSize: 2000000,

        /**
         * If `true`, the individual chunks of a file are being uploaded simultaneously.
         */
        parallelChunkUploads: false,

        /**
         * Whether a chunk should be retried if it fails.
         */
        retryChunks: false,

        /**
         * If `retryChunks` is true, how many times should it be retried.
         */
        retryChunksLimit: 3,

        /**
         * If not `null` defines how many files this Dropzone handles. If it exceeds,
         * the event `maxfilesexceeded` will be called. The dropzone element gets the
         * class `dz-max-files-reached` accordingly so you can provide visual feedback.
         */
        maxFilesize: 256,

        /**
         * The name of the file param that gets transferred.
         * **NOTE**: If you have the option  `uploadMultiple` set to `true`, then
         * Dropzone will append `[]` to the name.
         */
        paramName: "file",

        /**
         * Whether thumbnails for images should be generated
         */
        createImageThumbnails: true,

        /**
         * In MB. When the filename exceeds this limit, the thumbnail will not be generated.
         */
        maxThumbnailFilesize: 10,

        /**
         * If `null`, the ratio of the image will be used to calculate it.
         */
        thumbnailWidth: 120,

        /**
         * The same as `thumbnailWidth`. If both are null, images will not be resized.
         */
        thumbnailHeight: 120,

        /**
         * How the images should be scaled down in case both, `thumbnailWidth` and `thumbnailHeight` are provided.
         * Can be either `contain` or `crop`.
         */
        thumbnailMethod: 'crop',

        /**
         * If set, images will be resized to these dimensions before being **uploaded**.
         * If only one, `resizeWidth` **or** `resizeHeight` is provided, the original aspect
         * ratio of the file will be preserved.
         *
         * The `options.transformFile` function uses these options, so if the `transformFile` function
         * is overridden, these options don't do anything.
         */
        resizeWidth: null,

        /**
         * See `resizeWidth`.
         */
        resizeHeight: null,

        /**
         * The mime type of the resized image (before it gets uploaded to the server).
         * If `null` the original mime type will be used. To force jpeg, for example, use `image/jpeg`.
         * See `resizeWidth` for more information.
         */
        resizeMimeType: null,

        /**
         * The quality of the resized images. See `resizeWidth`.
         */
        resizeQuality: 0.8,

        /**
         * How the images should be scaled down in case both, `resizeWidth` and `resizeHeight` are provided.
         * Can be either `contain` or `crop`.
         */
        resizeMethod: 'contain',

        /**
         * The base that is used to calculate the filesize. You can change this to
         * 1024 if you would rather display kibibytes, mebibytes, etc...
         * 1024 is technically incorrect, because `1024 bytes` are `1 kibibyte` not `1 kilobyte`.
         * You can change this to `1024` if you don't care about validity.
         */
        filesizeBase: 1000,

        /**
         * Can be used to limit the maximum number of files that will be handled by this Dropzone
         */
        maxFiles: null,

        /**
         * An optional object to send additional headers to the server. Eg:
         * `{ "My-Awesome-Header": "header value" }`
         */
        headers: null,

        /**
         * If `true`, the dropzone element itself will be clickable, if `false`
         * nothing will be clickable.
         *
         * You can also pass an HTML element, a CSS selector (for multiple elements)
         * or an array of those. In that case, all of those elements will trigger an
         * upload when clicked.
         */
        clickable: true,

        /**
         * Whether hidden files in directories should be ignored.
         */
        ignoreHiddenFiles: true,

        /**
         * The default implementation of `accept` checks the file's mime type or
         * extension against this list. This is a comma separated list of mime
         * types or file extensions.
         *
         * Eg.: `image/*,application/pdf,.psd`
         *
         * If the Dropzone is `clickable` this option will also be used as
         * [`accept`](https://developer.mozilla.org/en-US/docs/HTML/Element/input#attr-accept)
         * parameter on the hidden file input as well.
         */
        acceptedFiles: null,

        /**
         * **Deprecated!**
         * Use acceptedFiles instead.
         */
        acceptedMimeTypes: null,

        /**
         * If false, files will be added to the queue but the queue will not be
         * processed automatically.
         * This can be useful if you need some additional user input before sending
         * files (or if you want want all files sent at once).
         * If you're ready to send the file simply call `myDropzone.processQueue()`.
         *
         * See the [enqueuing file uploads](#enqueuing-file-uploads) documentation
         * section for more information.
         */
        autoProcessQueue: true,

        /**
         * If false, files added to the dropzone will not be queued by default.
         * You'll have to call `enqueueFile(file)` manually.
         */
        autoQueue: true,

        /**
         * If `true`, this will add a link to every file preview to remove or cancel (if
         * already uploading) the file. The `dictCancelUpload`, `dictCancelUploadConfirmation`
         * and `dictRemoveFile` options are used for the wording.
         */
        addRemoveLinks: false,

        /**
         * Defines where to display the file previews – if `null` the
         * Dropzone element itself is used. Can be a plain `HTMLElement` or a CSS
         * selector. The element should have the `dropzone-previews` class so
         * the previews are displayed properly.
         */
        previewsContainer: null,

        /**
         * This is the element the hidden input field (which is used when clicking on the
         * dropzone to trigger file selection) will be appended to. This might
         * be important in case you use frameworks to switch the content of your page.
         *
         * Can be a selector string, or an element directly.
         */
        hiddenInputContainer: "body",

        /**
         * If null, no capture type will be specified
         * If camera, mobile devices will skip the file selection and choose camera
         * If microphone, mobile devices will skip the file selection and choose the microphone
         * If camcorder, mobile devices will skip the file selection and choose the camera in video mode
         * On apple devices multiple must be set to false.  AcceptedFiles may need to
         * be set to an appropriate mime type (e.g. "image/*", "audio/*", or "video/*").
         */
        capture: null,

        /**
         * **Deprecated**. Use `renameFile` instead.
         */
        renameFilename: null,

        /**
         * A function that is invoked before the file is uploaded to the server and renames the file.
         * This function gets the `File` as argument and can use the `file.name`. The actual name of the
         * file that gets used during the upload can be accessed through `file.upload.filename`.
         */
        renameFile: null,

        /**
         * If `true` the fallback will be forced. This is very useful to test your server
         * implementations first and make sure that everything works as
         * expected without dropzone if you experience problems, and to test
         * how your fallbacks will look.
         */
        forceFallback: false,

        /**
         * The text used before any files are dropped.
         */
        dictDefaultMessage: "Drop files here to upload",

        /**
         * The text that replaces the default message text it the browser is not supported.
         */
        dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",

        /**
         * The text that will be added before the fallback form.
         * If you provide a  fallback element yourself, or if this option is `null` this will
         * be ignored.
         */
        dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",

        /**
         * If the filesize is too big.
         * `{{filesize}}` and `{{maxFilesize}}` will be replaced with the respective configuration values.
         */
        dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",

        /**
         * If the file doesn't match the file type.
         */
        dictInvalidFileType: "You can't upload files of this type.",

        /**
         * If the server response was invalid.
         * `{{statusCode}}` will be replaced with the servers status code.
         */
        dictResponseError: "Server responded with {{statusCode}} code.",

        /**
         * If `addRemoveLinks` is true, the text to be used for the cancel upload link.
         */
        dictCancelUpload: "Cancel upload",

        /**
         * The text that is displayed if an upload was manually canceled
         */
        dictUploadCanceled: "Upload canceled.",

        /**
         * If `addRemoveLinks` is true, the text to be used for confirmation when cancelling upload.
         */
        dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",

        /**
         * If `addRemoveLinks` is true, the text to be used to remove a file.
         */
        dictRemoveFile: "Remove file",

        /**
         * If this is not null, then the user will be prompted before removing a file.
         */
        dictRemoveFileConfirmation: null,

        /**
         * Displayed if `maxFiles` is st and exceeded.
         * The string `{{maxFiles}}` will be replaced by the configuration value.
         */
        dictMaxFilesExceeded: "You can not upload any more files.",

        /**
         * Allows you to translate the different units. Starting with `tb` for terabytes and going down to
         * `b` for bytes.
         */
        dictFileSizeUnits: { tb: "TB", gb: "GB", mb: "MB", kb: "KB", b: "b" },
        /**
         * Called when dropzone initialized
         * You can add event listeners here
         */
        init: function init() {},


        /**
         * Can be an **object** of additional parameters to transfer to the server, **or** a `Function`
         * that gets invoked with the `files`, `xhr` and, if it's a chunked upload, `chunk` arguments. In case
         * of a function, this needs to return a map.
         *
         * The default implementation does nothing for normal uploads, but adds relevant information for
         * chunked uploads.
         *
         * This is the same as adding hidden input fields in the form element.
         */
        params: function params(files, xhr, chunk) {
          if (chunk) {
            return {
              dzuuid: chunk.file.upload.uuid,
              dzchunkindex: chunk.index,
              dztotalfilesize: chunk.file.size,
              dzchunksize: this.options.chunkSize,
              dztotalchunkcount: chunk.file.upload.totalChunkCount,
              dzchunkbyteoffset: chunk.index * this.options.chunkSize
            };
          }
        },


        /**
         * A function that gets a [file](https://developer.mozilla.org/en-US/docs/DOM/File)
         * and a `done` function as parameters.
         *
         * If the done function is invoked without arguments, the file is "accepted" and will
         * be processed. If you pass an error message, the file is rejected, and the error
         * message will be displayed.
         * This function will not be called if the file is too big or doesn't match the mime types.
         */
        accept: function accept(file, done) {
          return done();
        },


        /**
         * The callback that will be invoked when all chunks have been uploaded for a file.
         * It gets the file for which the chunks have been uploaded as the first parameter,
         * and the `done` function as second. `done()` needs to be invoked when everything
         * needed to finish the upload process is done.
         */
        chunksUploaded: function chunksUploaded(file, done) {
          done();
        },

        /**
         * Gets called when the browser is not supported.
         * The default implementation shows the fallback input field and adds
         * a text.
         */
        fallback: function fallback() {
          // This code should pass in IE7... :(
          var messageElement = void 0;
          this.element.className = this.element.className + " dz-browser-not-supported";

          for (var _iterator2 = this.element.getElementsByTagName("div"), _isArray2 = true, _i2 = 0, _iterator2 = _isArray2 ? _iterator2 : _iterator2[Symbol.iterator]();;) {
            var _ref2;

            if (_isArray2) {
              if (_i2 >= _iterator2.length) break;
              _ref2 = _iterator2[_i2++];
            } else {
              _i2 = _iterator2.next();
              if (_i2.done) break;
              _ref2 = _i2.value;
            }

            var child = _ref2;

            if (/(^| )dz-message($| )/.test(child.className)) {
              messageElement = child;
              child.className = "dz-message"; // Removes the 'dz-default' class
              break;
            }
          }
          if (!messageElement) {
            messageElement = Dropzone.createElement("<div class=\"dz-message\"><span></span></div>");
            this.element.appendChild(messageElement);
          }

          var span = messageElement.getElementsByTagName("span")[0];
          if (span) {
            if (span.textContent != null) {
              span.textContent = this.options.dictFallbackMessage;
            } else if (span.innerText != null) {
              span.innerText = this.options.dictFallbackMessage;
            }
          }

          return this.element.appendChild(this.getFallbackForm());
        },


        /**
         * Gets called to calculate the thumbnail dimensions.
         *
         * It gets `file`, `width` and `height` (both may be `null`) as parameters and must return an object containing:
         *
         *  - `srcWidth` & `srcHeight` (required)
         *  - `trgWidth` & `trgHeight` (required)
         *  - `srcX` & `srcY` (optional, default `0`)
         *  - `trgX` & `trgY` (optional, default `0`)
         *
         * Those values are going to be used by `ctx.drawImage()`.
         */
        resize: function resize(file, width, height, resizeMethod) {
          var info = {
            srcX: 0,
            srcY: 0,
            srcWidth: file.width,
            srcHeight: file.height
          };

          var srcRatio = file.width / file.height;

          // Automatically calculate dimensions if not specified
          if (width == null && height == null) {
            width = info.srcWidth;
            height = info.srcHeight;
          } else if (width == null) {
            width = height * srcRatio;
          } else if (height == null) {
            height = width / srcRatio;
          }

          // Make sure images aren't upscaled
          width = Math.min(width, info.srcWidth);
          height = Math.min(height, info.srcHeight);

          var trgRatio = width / height;

          if (info.srcWidth > width || info.srcHeight > height) {
            // Image is bigger and needs rescaling
            if (resizeMethod === 'crop') {
              if (srcRatio > trgRatio) {
                info.srcHeight = file.height;
                info.srcWidth = info.srcHeight * trgRatio;
              } else {
                info.srcWidth = file.width;
                info.srcHeight = info.srcWidth / trgRatio;
              }
            } else if (resizeMethod === 'contain') {
              // Method 'contain'
              if (srcRatio > trgRatio) {
                height = width / srcRatio;
              } else {
                width = height * srcRatio;
              }
            } else {
              throw new Error("Unknown resizeMethod '" + resizeMethod + "'");
            }
          }

          info.srcX = (file.width - info.srcWidth) / 2;
          info.srcY = (file.height - info.srcHeight) / 2;

          info.trgWidth = width;
          info.trgHeight = height;

          return info;
        },


        /**
         * Can be used to transform the file (for example, resize an image if necessary).
         *
         * The default implementation uses `resizeWidth` and `resizeHeight` (if provided) and resizes
         * images according to those dimensions.
         *
         * Gets the `file` as the first parameter, and a `done()` function as the second, that needs
         * to be invoked with the file when the transformation is done.
         */
        transformFile: function transformFile(file, done) {
          if ((this.options.resizeWidth || this.options.resizeHeight) && file.type.match(/image.*/)) {
            return this.resizeImage(file, this.options.resizeWidth, this.options.resizeHeight, this.options.resizeMethod, done);
          } else {
            return done(file);
          }
        },


        /**
         * A string that contains the template used for each dropped
         * file. Change it to fulfill your needs but make sure to properly
         * provide all elements.
         *
         * If you want to use an actual HTML element instead of providing a String
         * as a config option, you could create a div with the id `tpl`,
         * put the template inside it and provide the element like this:
         *
         *     document
         *       .querySelector('#tpl')
         *       .innerHTML
         *
         */
        previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-image\"><img data-dz-thumbnail /></div>\n  <div class=\"dz-details\">\n    <div class=\"dz-size\"><span data-dz-size></span></div>\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n  </div>\n  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n  <div class=\"dz-success-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Check</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <path d=\"M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" stroke-opacity=\"0.198794158\" stroke=\"#747474\" fill-opacity=\"0.816519475\" fill=\"#FFFFFF\" sketch:type=\"MSShapeGroup\"></path>\n      </g>\n    </svg>\n  </div>\n  <div class=\"dz-error-mark\">\n    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">\n      <title>Error</title>\n      <defs></defs>\n      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">\n        <g id=\"Check-+-Oval-2\" sketch:type=\"MSLayerGroup\" stroke=\"#747474\" stroke-opacity=\"0.198794158\" fill=\"#FFFFFF\" fill-opacity=\"0.816519475\">\n          <path d=\"M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z\" id=\"Oval-2\" sketch:type=\"MSShapeGroup\"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>",

        // END OPTIONS
        // (Required by the dropzone documentation parser)


        /*
         Those functions register themselves to the events on init and handle all
         the user interface specific stuff. Overwriting them won't break the upload
         but can break the way it's displayed.
         You can overwrite them if you don't like the default behavior. If you just
         want to add an additional event handler, register it on the dropzone object
         and don't overwrite those options.
         */

        // Those are self explanatory and simply concern the DragnDrop.
        drop: function drop(e) {
          return this.element.classList.remove("dz-drag-hover");
        },
        dragstart: function dragstart(e) {},
        dragend: function dragend(e) {
          return this.element.classList.remove("dz-drag-hover");
        },
        dragenter: function dragenter(e) {
          return this.element.classList.add("dz-drag-hover");
        },
        dragover: function dragover(e) {
          return this.element.classList.add("dz-drag-hover");
        },
        dragleave: function dragleave(e) {
          return this.element.classList.remove("dz-drag-hover");
        },
        paste: function paste(e) {},


        // Called whenever there are no files left in the dropzone anymore, and the
        // dropzone should be displayed as if in the initial state.
        reset: function reset() {
          return this.element.classList.remove("dz-started");
        },


        // Called when a file is added to the queue
        // Receives `file`
        addedfile: function addedfile(file) {
          var _this2 = this;

          if (this.element === this.previewsContainer) {
            this.element.classList.add("dz-started");
          }

          if (this.previewsContainer) {
            file.previewElement = Dropzone.createElement(this.options.previewTemplate.trim());
            file.previewTemplate = file.previewElement; // Backwards compatibility

            this.previewsContainer.appendChild(file.previewElement);
            for (var _iterator3 = file.previewElement.querySelectorAll("[data-dz-name]"), _isArray3 = true, _i3 = 0, _iterator3 = _isArray3 ? _iterator3 : _iterator3[Symbol.iterator]();;) {
              var _ref3;

              if (_isArray3) {
                if (_i3 >= _iterator3.length) break;
                _ref3 = _iterator3[_i3++];
              } else {
                _i3 = _iterator3.next();
                if (_i3.done) break;
                _ref3 = _i3.value;
              }

              var node = _ref3;

              node.textContent = file.name;
            }
            for (var _iterator4 = file.previewElement.querySelectorAll("[data-dz-size]"), _isArray4 = true, _i4 = 0, _iterator4 = _isArray4 ? _iterator4 : _iterator4[Symbol.iterator]();;) {
              if (_isArray4) {
                if (_i4 >= _iterator4.length) break;
                node = _iterator4[_i4++];
              } else {
                _i4 = _iterator4.next();
                if (_i4.done) break;
                node = _i4.value;
              }

              node.innerHTML = this.filesize(file.size);
            }

            if (this.options.addRemoveLinks) {
              file._removeLink = Dropzone.createElement("<a class=\"dz-remove\" href=\"javascript:undefined;\" data-dz-remove>" + this.options.dictRemoveFile + "</a>");
              file.previewElement.appendChild(file._removeLink);
            }

            var removeFileEvent = function removeFileEvent(e) {
              e.preventDefault();
              e.stopPropagation();
              if (file.status === Dropzone.UPLOADING) {
                return Dropzone.confirm(_this2.options.dictCancelUploadConfirmation, function () {
                  return _this2.removeFile(file);
                });
              } else {
                if (_this2.options.dictRemoveFileConfirmation) {
                  return Dropzone.confirm(_this2.options.dictRemoveFileConfirmation, function () {
                    return _this2.removeFile(file);
                  });
                } else {
                  return _this2.removeFile(file);
                }
              }
            };

            for (var _iterator5 = file.previewElement.querySelectorAll("[data-dz-remove]"), _isArray5 = true, _i5 = 0, _iterator5 = _isArray5 ? _iterator5 : _iterator5[Symbol.iterator]();;) {
              var _ref4;

              if (_isArray5) {
                if (_i5 >= _iterator5.length) break;
                _ref4 = _iterator5[_i5++];
              } else {
                _i5 = _iterator5.next();
                if (_i5.done) break;
                _ref4 = _i5.value;
              }

              var removeLink = _ref4;

              removeLink.addEventListener("click", removeFileEvent);
            }
          }
        },


        // Called whenever a file is removed.
        removedfile: function removedfile(file) {
          if (file.previewElement != null && file.previewElement.parentNode != null) {
            file.previewElement.parentNode.removeChild(file.previewElement);
          }
          return this._updateMaxFilesReachedClass();
        },


        // Called when a thumbnail has been generated
        // Receives `file` and `dataUrl`
        thumbnail: function thumbnail(file, dataUrl) {
          if (file.previewElement) {
            file.previewElement.classList.remove("dz-file-preview");
            for (var _iterator6 = file.previewElement.querySelectorAll("[data-dz-thumbnail]"), _isArray6 = true, _i6 = 0, _iterator6 = _isArray6 ? _iterator6 : _iterator6[Symbol.iterator]();;) {
              var _ref5;

              if (_isArray6) {
                if (_i6 >= _iterator6.length) break;
                _ref5 = _iterator6[_i6++];
              } else {
                _i6 = _iterator6.next();
                if (_i6.done) break;
                _ref5 = _i6.value;
              }

              var thumbnailElement = _ref5;

              thumbnailElement.alt = file.name;
              thumbnailElement.src = dataUrl;
            }

            return setTimeout(function () {
              return file.previewElement.classList.add("dz-image-preview");
            }, 1);
          }
        },


        // Called whenever an error occurs
        // Receives `file` and `message`
        error: function error(file, message) {
          if (file.previewElement) {
            file.previewElement.classList.add("dz-error");
            if (typeof message !== "String" && message.error) {
              message = message.error;
            }
            for (var _iterator7 = file.previewElement.querySelectorAll("[data-dz-errormessage]"), _isArray7 = true, _i7 = 0, _iterator7 = _isArray7 ? _iterator7 : _iterator7[Symbol.iterator]();;) {
              var _ref6;

              if (_isArray7) {
                if (_i7 >= _iterator7.length) break;
                _ref6 = _iterator7[_i7++];
              } else {
                _i7 = _iterator7.next();
                if (_i7.done) break;
                _ref6 = _i7.value;
              }

              var node = _ref6;

              node.textContent = message;
            }
          }
        },
        errormultiple: function errormultiple() {},


        // Called when a file gets processed. Since there is a cue, not all added
        // files are processed immediately.
        // Receives `file`
        processing: function processing(file) {
          if (file.previewElement) {
            file.previewElement.classList.add("dz-processing");
            if (file._removeLink) {
              return file._removeLink.innerHTML = this.options.dictCancelUpload;
            }
          }
        },
        processingmultiple: function processingmultiple() {},


        // Called whenever the upload progress gets updated.
        // Receives `file`, `progress` (percentage 0-100) and `bytesSent`.
        // To get the total number of bytes of the file, use `file.size`
        uploadprogress: function uploadprogress(file, progress, bytesSent) {
          if (file.previewElement) {
            for (var _iterator8 = file.previewElement.querySelectorAll("[data-dz-uploadprogress]"), _isArray8 = true, _i8 = 0, _iterator8 = _isArray8 ? _iterator8 : _iterator8[Symbol.iterator]();;) {
              var _ref7;

              if (_isArray8) {
                if (_i8 >= _iterator8.length) break;
                _ref7 = _iterator8[_i8++];
              } else {
                _i8 = _iterator8.next();
                if (_i8.done) break;
                _ref7 = _i8.value;
              }

              var node = _ref7;

              node.nodeName === 'PROGRESS' ? node.value = progress : node.style.width = progress + "%";
            }
          }
        },


        // Called whenever the total upload progress gets updated.
        // Called with totalUploadProgress (0-100), totalBytes and totalBytesSent
        totaluploadprogress: function totaluploadprogress() {},


        // Called just before the file is sent. Gets the `xhr` object as second
        // parameter, so you can modify it (for example to add a CSRF token) and a
        // `formData` object to add additional information.
        sending: function sending() {},
        sendingmultiple: function sendingmultiple() {},


        // When the complete upload is finished and successful
        // Receives `file`
        success: function success(file) {
          if (file.previewElement) {
            return file.previewElement.classList.add("dz-success");
          }
        },
        successmultiple: function successmultiple() {},


        // When the upload is canceled.
        canceled: function canceled(file) {
          return this.emit("error", file, this.options.dictUploadCanceled);
        },
        canceledmultiple: function canceledmultiple() {},


        // When the upload is finished, either with success or an error.
        // Receives `file`
        complete: function complete(file) {
          if (file._removeLink) {
            file._removeLink.innerHTML = this.options.dictRemoveFile;
          }
          if (file.previewElement) {
            return file.previewElement.classList.add("dz-complete");
          }
        },
        completemultiple: function completemultiple() {},
        maxfilesexceeded: function maxfilesexceeded() {},
        maxfilesreached: function maxfilesreached() {},
        queuecomplete: function queuecomplete() {},
        addedfiles: function addedfiles() {}
      };

      this.prototype._thumbnailQueue = [];
      this.prototype._processingThumbnail = false;
    }

    // global utility

  }, {
    key: "extend",
    value: function extend(target) {
      for (var _len2 = arguments.length, objects = Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
        objects[_key2 - 1] = arguments[_key2];
      }

      for (var _iterator9 = objects, _isArray9 = true, _i9 = 0, _iterator9 = _isArray9 ? _iterator9 : _iterator9[Symbol.iterator]();;) {
        var _ref8;

        if (_isArray9) {
          if (_i9 >= _iterator9.length) break;
          _ref8 = _iterator9[_i9++];
        } else {
          _i9 = _iterator9.next();
          if (_i9.done) break;
          _ref8 = _i9.value;
        }

        var object = _ref8;

        for (var key in object) {
          var val = object[key];
          target[key] = val;
        }
      }
      return target;
    }
  }]);

  function Dropzone(el, options) {
    _classCallCheck(this, Dropzone);

    var _this = _possibleConstructorReturn(this, (Dropzone.__proto__ || Object.getPrototypeOf(Dropzone)).call(this));

    var fallback = void 0,
        left = void 0;
    _this.element = el;
    // For backwards compatibility since the version was in the prototype previously
    _this.version = Dropzone.version;

    _this.defaultOptions.previewTemplate = _this.defaultOptions.previewTemplate.replace(/\n*/g, "");

    _this.clickableElements = [];
    _this.listeners = [];
    _this.files = []; // All files

    if (typeof _this.element === "string") {
      _this.element = document.querySelector(_this.element);
    }

    // Not checking if instance of HTMLElement or Element since IE9 is extremely weird.
    if (!_this.element || _this.element.nodeType == null) {
      throw new Error("Invalid dropzone element.");
    }

    if (_this.element.dropzone) {
      throw new Error("Dropzone already attached.");
    }

    // Now add this dropzone to the instances.
    Dropzone.instances.push(_this);

    // Put the dropzone inside the element itself.
    _this.element.dropzone = _this;

    var elementOptions = (left = Dropzone.optionsForElement(_this.element)) != null ? left : {};

    _this.options = Dropzone.extend({}, _this.defaultOptions, elementOptions, options != null ? options : {});

    // If the browser failed, just call the fallback and leave
    if (_this.options.forceFallback || !Dropzone.isBrowserSupported()) {
      var _ret;

      return _ret = _this.options.fallback.call(_this), _possibleConstructorReturn(_this, _ret);
    }

    // @options.url = @element.getAttribute "action" unless @options.url?
    if (_this.options.url == null) {
      _this.options.url = _this.element.getAttribute("action");
    }

    if (!_this.options.url) {
      throw new Error("No URL provided.");
    }

    if (_this.options.acceptedFiles && _this.options.acceptedMimeTypes) {
      throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");
    }

    if (_this.options.uploadMultiple && _this.options.chunking) {
      throw new Error('You cannot set both: uploadMultiple and chunking.');
    }

    // Backwards compatibility
    if (_this.options.acceptedMimeTypes) {
      _this.options.acceptedFiles = _this.options.acceptedMimeTypes;
      delete _this.options.acceptedMimeTypes;
    }

    // Backwards compatibility
    if (_this.options.renameFilename != null) {
      _this.options.renameFile = function (file) {
        return _this.options.renameFilename.call(_this, file.name, file);
      };
    }

    _this.options.method = _this.options.method.toUpperCase();

    if ((fallback = _this.getExistingFallback()) && fallback.parentNode) {
      // Remove the fallback
      fallback.parentNode.removeChild(fallback);
    }

    // Display previews in the previewsContainer element or the Dropzone element unless explicitly set to false
    if (_this.options.previewsContainer !== false) {
      if (_this.options.previewsContainer) {
        _this.previewsContainer = Dropzone.getElement(_this.options.previewsContainer, "previewsContainer");
      } else {
        _this.previewsContainer = _this.element;
      }
    }

    if (_this.options.clickable) {
      if (_this.options.clickable === true) {
        _this.clickableElements = [_this.element];
      } else {
        _this.clickableElements = Dropzone.getElements(_this.options.clickable, "clickable");
      }
    }

    _this.init();
    return _this;
  }

  // Returns all files that have been accepted


  _createClass(Dropzone, [{
    key: "getAcceptedFiles",
    value: function getAcceptedFiles() {
      return this.files.filter(function (file) {
        return file.accepted;
      }).map(function (file) {
        return file;
      });
    }

    // Returns all files that have been rejected
    // Not sure when that's going to be useful, but added for completeness.

  }, {
    key: "getRejectedFiles",
    value: function getRejectedFiles() {
      return this.files.filter(function (file) {
        return !file.accepted;
      }).map(function (file) {
        return file;
      });
    }
  }, {
    key: "getFilesWithStatus",
    value: function getFilesWithStatus(status) {
      return this.files.filter(function (file) {
        return file.status === status;
      }).map(function (file) {
        return file;
      });
    }

    // Returns all files that are in the queue

  }, {
    key: "getQueuedFiles",
    value: function getQueuedFiles() {
      return this.getFilesWithStatus(Dropzone.QUEUED);
    }
  }, {
    key: "getUploadingFiles",
    value: function getUploadingFiles() {
      return this.getFilesWithStatus(Dropzone.UPLOADING);
    }
  }, {
    key: "getAddedFiles",
    value: function getAddedFiles() {
      return this.getFilesWithStatus(Dropzone.ADDED);
    }

    // Files that are either queued or uploading

  }, {
    key: "getActiveFiles",
    value: function getActiveFiles() {
      return this.files.filter(function (file) {
        return file.status === Dropzone.UPLOADING || file.status === Dropzone.QUEUED;
      }).map(function (file) {
        return file;
      });
    }

    // The function that gets called when Dropzone is initialized. You
    // can (and should) setup event listeners inside this function.

  }, {
    key: "init",
    value: function init() {
      var _this3 = this;

      // In case it isn't set already
      if (this.element.tagName === "form") {
        this.element.setAttribute("enctype", "multipart/form-data");
      }

      if (this.element.classList.contains("dropzone") && !this.element.querySelector(".dz-message")) {
        this.element.appendChild(Dropzone.createElement("<div class=\"dz-default dz-message\"><span>" + this.options.dictDefaultMessage + "</span></div>"));
      }

      if (this.clickableElements.length) {
        var setupHiddenFileInput = function setupHiddenFileInput() {
          if (_this3.hiddenFileInput) {
            _this3.hiddenFileInput.parentNode.removeChild(_this3.hiddenFileInput);
          }
          _this3.hiddenFileInput = document.createElement("input");
          _this3.hiddenFileInput.setAttribute("type", "file");
          if (_this3.options.maxFiles === null || _this3.options.maxFiles > 1) {
            _this3.hiddenFileInput.setAttribute("multiple", "multiple");
          }
          _this3.hiddenFileInput.className = "dz-hidden-input";

          if (_this3.options.acceptedFiles !== null) {
            _this3.hiddenFileInput.setAttribute("accept", _this3.options.acceptedFiles);
          }
          if (_this3.options.capture !== null) {
            _this3.hiddenFileInput.setAttribute("capture", _this3.options.capture);
          }

          // Not setting `display="none"` because some browsers don't accept clicks
          // on elements that aren't displayed.
          _this3.hiddenFileInput.style.visibility = "hidden";
          _this3.hiddenFileInput.style.position = "absolute";
          _this3.hiddenFileInput.style.top = "0";
          _this3.hiddenFileInput.style.left = "0";
          _this3.hiddenFileInput.style.height = "0";
          _this3.hiddenFileInput.style.width = "0";
          Dropzone.getElement(_this3.options.hiddenInputContainer, 'hiddenInputContainer').appendChild(_this3.hiddenFileInput);
          return _this3.hiddenFileInput.addEventListener("change", function () {
            var files = _this3.hiddenFileInput.files;

            if (files.length) {
              for (var _iterator10 = files, _isArray10 = true, _i10 = 0, _iterator10 = _isArray10 ? _iterator10 : _iterator10[Symbol.iterator]();;) {
                var _ref9;

                if (_isArray10) {
                  if (_i10 >= _iterator10.length) break;
                  _ref9 = _iterator10[_i10++];
                } else {
                  _i10 = _iterator10.next();
                  if (_i10.done) break;
                  _ref9 = _i10.value;
                }

                var file = _ref9;

                _this3.addFile(file);
              }
            }
            _this3.emit("addedfiles", files);
            return setupHiddenFileInput();
          });
        };
        setupHiddenFileInput();
      }

      this.URL = window.URL !== null ? window.URL : window.webkitURL;

      // Setup all event listeners on the Dropzone object itself.
      // They're not in @setupEventListeners() because they shouldn't be removed
      // again when the dropzone gets disabled.
      for (var _iterator11 = this.events, _isArray11 = true, _i11 = 0, _iterator11 = _isArray11 ? _iterator11 : _iterator11[Symbol.iterator]();;) {
        var _ref10;

        if (_isArray11) {
          if (_i11 >= _iterator11.length) break;
          _ref10 = _iterator11[_i11++];
        } else {
          _i11 = _iterator11.next();
          if (_i11.done) break;
          _ref10 = _i11.value;
        }

        var eventName = _ref10;

        this.on(eventName, this.options[eventName]);
      }

      this.on("uploadprogress", function () {
        return _this3.updateTotalUploadProgress();
      });

      this.on("removedfile", function () {
        return _this3.updateTotalUploadProgress();
      });

      this.on("canceled", function (file) {
        return _this3.emit("complete", file);
      });

      // Emit a `queuecomplete` event if all files finished uploading.
      this.on("complete", function (file) {
        if (_this3.getAddedFiles().length === 0 && _this3.getUploadingFiles().length === 0 && _this3.getQueuedFiles().length === 0) {
          // This needs to be deferred so that `queuecomplete` really triggers after `complete`
          return setTimeout(function () {
            return _this3.emit("queuecomplete");
          }, 0);
        }
      });

      var noPropagation = function noPropagation(e) {
        e.stopPropagation();
        if (e.preventDefault) {
          return e.preventDefault();
        } else {
          return e.returnValue = false;
        }
      };

      // Create the listeners
      this.listeners = [{
        element: this.element,
        events: {
          "dragstart": function dragstart(e) {
            return _this3.emit("dragstart", e);
          },
          "dragenter": function dragenter(e) {
            noPropagation(e);
            return _this3.emit("dragenter", e);
          },
          "dragover": function dragover(e) {
            // Makes it possible to drag files from chrome's download bar
            // http://stackoverflow.com/questions/19526430/drag-and-drop-file-uploads-from-chrome-downloads-bar
            // Try is required to prevent bug in Internet Explorer 11 (SCRIPT65535 exception)
            var efct = void 0;
            try {
              efct = e.dataTransfer.effectAllowed;
            } catch (error) {}
            e.dataTransfer.dropEffect = 'move' === efct || 'linkMove' === efct ? 'move' : 'copy';

            noPropagation(e);
            return _this3.emit("dragover", e);
          },
          "dragleave": function dragleave(e) {
            return _this3.emit("dragleave", e);
          },
          "drop": function drop(e) {
            noPropagation(e);
            return _this3.drop(e);
          },
          "dragend": function dragend(e) {
            return _this3.emit("dragend", e);
          }

          // This is disabled right now, because the browsers don't implement it properly.
          // "paste": (e) =>
          //   noPropagation e
          //   @paste e
        } }];

      this.clickableElements.forEach(function (clickableElement) {
        return _this3.listeners.push({
          element: clickableElement,
          events: {
            "click": function click(evt) {
              // Only the actual dropzone or the message element should trigger file selection
              if (clickableElement !== _this3.element || evt.target === _this3.element || Dropzone.elementInside(evt.target, _this3.element.querySelector(".dz-message"))) {
                _this3.hiddenFileInput.click(); // Forward the click
              }
              return true;
            }
          }
        });
      });

      this.enable();

      return this.options.init.call(this);
    }

    // Not fully tested yet

  }, {
    key: "destroy",
    value: function destroy() {
      this.disable();
      this.removeAllFiles(true);
      if (this.hiddenFileInput != null ? this.hiddenFileInput.parentNode : undefined) {
        this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput);
        this.hiddenFileInput = null;
      }
      delete this.element.dropzone;
      return Dropzone.instances.splice(Dropzone.instances.indexOf(this), 1);
    }
  }, {
    key: "updateTotalUploadProgress",
    value: function updateTotalUploadProgress() {
      var totalUploadProgress = void 0;
      var totalBytesSent = 0;
      var totalBytes = 0;

      var activeFiles = this.getActiveFiles();

      if (activeFiles.length) {
        for (var _iterator12 = this.getActiveFiles(), _isArray12 = true, _i12 = 0, _iterator12 = _isArray12 ? _iterator12 : _iterator12[Symbol.iterator]();;) {
          var _ref11;

          if (_isArray12) {
            if (_i12 >= _iterator12.length) break;
            _ref11 = _iterator12[_i12++];
          } else {
            _i12 = _iterator12.next();
            if (_i12.done) break;
            _ref11 = _i12.value;
          }

          var file = _ref11;

          totalBytesSent += file.upload.bytesSent;
          totalBytes += file.upload.total;
        }
        totalUploadProgress = 100 * totalBytesSent / totalBytes;
      } else {
        totalUploadProgress = 100;
      }

      return this.emit("totaluploadprogress", totalUploadProgress, totalBytes, totalBytesSent);
    }

    // @options.paramName can be a function taking one parameter rather than a string.
    // A parameter name for a file is obtained simply by calling this with an index number.

  }, {
    key: "_getParamName",
    value: function _getParamName(n) {
      if (typeof this.options.paramName === "function") {
        return this.options.paramName(n);
      } else {
        return "" + this.options.paramName + (this.options.uploadMultiple ? "[" + n + "]" : "");
      }
    }

    // If @options.renameFile is a function,
    // the function will be used to rename the file.name before appending it to the formData

  }, {
    key: "_renameFile",
    value: function _renameFile(file) {
      if (typeof this.options.renameFile !== "function") {
        return file.name;
      }
      return this.options.renameFile(file);
    }

    // Returns a form that can be used as fallback if the browser does not support DragnDrop
    //
    // If the dropzone is already a form, only the input field and button are returned. Otherwise a complete form element is provided.
    // This code has to pass in IE7 :(

  }, {
    key: "getFallbackForm",
    value: function getFallbackForm() {
      var existingFallback = void 0,
          form = void 0;
      if (existingFallback = this.getExistingFallback()) {
        return existingFallback;
      }

      var fieldsString = "<div class=\"dz-fallback\">";
      if (this.options.dictFallbackText) {
        fieldsString += "<p>" + this.options.dictFallbackText + "</p>";
      }
      fieldsString += "<input type=\"file\" name=\"" + this._getParamName(0) + "\" " + (this.options.uploadMultiple ? 'multiple="multiple"' : undefined) + " /><input type=\"submit\" value=\"Upload!\"></div>";

      var fields = Dropzone.createElement(fieldsString);
      if (this.element.tagName !== "FORM") {
        form = Dropzone.createElement("<form action=\"" + this.options.url + "\" enctype=\"multipart/form-data\" method=\"" + this.options.method + "\"></form>");
        form.appendChild(fields);
      } else {
        // Make sure that the enctype and method attributes are set properly
        this.element.setAttribute("enctype", "multipart/form-data");
        this.element.setAttribute("method", this.options.method);
      }
      return form != null ? form : fields;
    }

    // Returns the fallback elements if they exist already
    //
    // This code has to pass in IE7 :(

  }, {
    key: "getExistingFallback",
    value: function getExistingFallback() {
      var getFallback = function getFallback(elements) {
        for (var _iterator13 = elements, _isArray13 = true, _i13 = 0, _iterator13 = _isArray13 ? _iterator13 : _iterator13[Symbol.iterator]();;) {
          var _ref12;

          if (_isArray13) {
            if (_i13 >= _iterator13.length) break;
            _ref12 = _iterator13[_i13++];
          } else {
            _i13 = _iterator13.next();
            if (_i13.done) break;
            _ref12 = _i13.value;
          }

          var el = _ref12;

          if (/(^| )fallback($| )/.test(el.className)) {
            return el;
          }
        }
      };

      var _arr = ["div", "form"];
      for (var _i14 = 0; _i14 < _arr.length; _i14++) {
        var tagName = _arr[_i14];
        var fallback;
        if (fallback = getFallback(this.element.getElementsByTagName(tagName))) {
          return fallback;
        }
      }
    }

    // Activates all listeners stored in @listeners

  }, {
    key: "setupEventListeners",
    value: function setupEventListeners() {
      return this.listeners.map(function (elementListeners) {
        return function () {
          var result = [];
          for (var event in elementListeners.events) {
            var listener = elementListeners.events[event];
            result.push(elementListeners.element.addEventListener(event, listener, false));
          }
          return result;
        }();
      });
    }

    // Deactivates all listeners stored in @listeners

  }, {
    key: "removeEventListeners",
    value: function removeEventListeners() {
      return this.listeners.map(function (elementListeners) {
        return function () {
          var result = [];
          for (var event in elementListeners.events) {
            var listener = elementListeners.events[event];
            result.push(elementListeners.element.removeEventListener(event, listener, false));
          }
          return result;
        }();
      });
    }

    // Removes all event listeners and cancels all files in the queue or being processed.

  }, {
    key: "disable",
    value: function disable() {
      var _this4 = this;

      this.clickableElements.forEach(function (element) {
        return element.classList.remove("dz-clickable");
      });
      this.removeEventListeners();
      this.disabled = true;

      return this.files.map(function (file) {
        return _this4.cancelUpload(file);
      });
    }
  }, {
    key: "enable",
    value: function enable() {
      delete this.disabled;
      this.clickableElements.forEach(function (element) {
        return element.classList.add("dz-clickable");
      });
      return this.setupEventListeners();
    }

    // Returns a nicely formatted filesize

  }, {
    key: "filesize",
    value: function filesize(size) {
      var selectedSize = 0;
      var selectedUnit = "b";

      if (size > 0) {
        var units = ['tb', 'gb', 'mb', 'kb', 'b'];

        for (var i = 0; i < units.length; i++) {
          var unit = units[i];
          var cutoff = Math.pow(this.options.filesizeBase, 4 - i) / 10;

          if (size >= cutoff) {
            selectedSize = size / Math.pow(this.options.filesizeBase, 4 - i);
            selectedUnit = unit;
            break;
          }
        }

        selectedSize = Math.round(10 * selectedSize) / 10; // Cutting of digits
      }

      return "<strong>" + selectedSize + "</strong> " + this.options.dictFileSizeUnits[selectedUnit];
    }

    // Adds or removes the `dz-max-files-reached` class from the form.

  }, {
    key: "_updateMaxFilesReachedClass",
    value: function _updateMaxFilesReachedClass() {
      if (this.options.maxFiles != null && this.getAcceptedFiles().length >= this.options.maxFiles) {
        if (this.getAcceptedFiles().length === this.options.maxFiles) {
          this.emit('maxfilesreached', this.files);
        }
        return this.element.classList.add("dz-max-files-reached");
      } else {
        return this.element.classList.remove("dz-max-files-reached");
      }
    }
  }, {
    key: "drop",
    value: function drop(e) {
      if (!e.dataTransfer) {
        return;
      }
      this.emit("drop", e);

      // Convert the FileList to an Array
      // This is necessary for IE11
      var files = [];
      for (var i = 0; i < e.dataTransfer.files.length; i++) {
        files[i] = e.dataTransfer.files[i];
      }

      this.emit("addedfiles", files);

      // Even if it's a folder, files.length will contain the folders.
      if (files.length) {
        var items = e.dataTransfer.items;

        if (items && items.length && items[0].webkitGetAsEntry != null) {
          // The browser supports dropping of folders, so handle items instead of files
          this._addFilesFromItems(items);
        } else {
          this.handleFiles(files);
        }
      }
    }
  }, {
    key: "paste",
    value: function paste(e) {
      if (__guard__(e != null ? e.clipboardData : undefined, function (x) {
        return x.items;
      }) == null) {
        return;
      }

      this.emit("paste", e);
      var items = e.clipboardData.items;


      if (items.length) {
        return this._addFilesFromItems(items);
      }
    }
  }, {
    key: "handleFiles",
    value: function handleFiles(files) {
      for (var _iterator14 = files, _isArray14 = true, _i15 = 0, _iterator14 = _isArray14 ? _iterator14 : _iterator14[Symbol.iterator]();;) {
        var _ref13;

        if (_isArray14) {
          if (_i15 >= _iterator14.length) break;
          _ref13 = _iterator14[_i15++];
        } else {
          _i15 = _iterator14.next();
          if (_i15.done) break;
          _ref13 = _i15.value;
        }

        var file = _ref13;

        this.addFile(file);
      }
    }

    // When a folder is dropped (or files are pasted), items must be handled
    // instead of files.

  }, {
    key: "_addFilesFromItems",
    value: function _addFilesFromItems(items) {
      var _this5 = this;

      return function () {
        var result = [];
        for (var _iterator15 = items, _isArray15 = true, _i16 = 0, _iterator15 = _isArray15 ? _iterator15 : _iterator15[Symbol.iterator]();;) {
          var _ref14;

          if (_isArray15) {
            if (_i16 >= _iterator15.length) break;
            _ref14 = _iterator15[_i16++];
          } else {
            _i16 = _iterator15.next();
            if (_i16.done) break;
            _ref14 = _i16.value;
          }

          var item = _ref14;

          var entry;
          if (item.webkitGetAsEntry != null && (entry = item.webkitGetAsEntry())) {
            if (entry.isFile) {
              result.push(_this5.addFile(item.getAsFile()));
            } else if (entry.isDirectory) {
              // Append all files from that directory to files
              result.push(_this5._addFilesFromDirectory(entry, entry.name));
            } else {
              result.push(undefined);
            }
          } else if (item.getAsFile != null) {
            if (item.kind == null || item.kind === "file") {
              result.push(_this5.addFile(item.getAsFile()));
            } else {
              result.push(undefined);
            }
          } else {
            result.push(undefined);
          }
        }
        return result;
      }();
    }

    // Goes through the directory, and adds each file it finds recursively

  }, {
    key: "_addFilesFromDirectory",
    value: function _addFilesFromDirectory(directory, path) {
      var _this6 = this;

      var dirReader = directory.createReader();

      var errorHandler = function errorHandler(error) {
        return __guardMethod__(console, 'log', function (o) {
          return o.log(error);
        });
      };

      var readEntries = function readEntries() {
        return dirReader.readEntries(function (entries) {
          if (entries.length > 0) {
            for (var _iterator16 = entries, _isArray16 = true, _i17 = 0, _iterator16 = _isArray16 ? _iterator16 : _iterator16[Symbol.iterator]();;) {
              var _ref15;

              if (_isArray16) {
                if (_i17 >= _iterator16.length) break;
                _ref15 = _iterator16[_i17++];
              } else {
                _i17 = _iterator16.next();
                if (_i17.done) break;
                _ref15 = _i17.value;
              }

              var entry = _ref15;

              if (entry.isFile) {
                entry.file(function (file) {
                  if (_this6.options.ignoreHiddenFiles && file.name.substring(0, 1) === '.') {
                    return;
                  }
                  file.fullPath = path + "/" + file.name;
                  return _this6.addFile(file);
                });
              } else if (entry.isDirectory) {
                _this6._addFilesFromDirectory(entry, path + "/" + entry.name);
              }
            }

            // Recursively call readEntries() again, since browser only handle
            // the first 100 entries.
            // See: https://developer.mozilla.org/en-US/docs/Web/API/DirectoryReader#readEntries
            readEntries();
          }
          return null;
        }, errorHandler);
      };

      return readEntries();
    }

    // If `done()` is called without argument the file is accepted
    // If you call it with an error message, the file is rejected
    // (This allows for asynchronous validation)
    //
    // This function checks the filesize, and if the file.type passes the
    // `acceptedFiles` check.

  }, {
    key: "accept",
    value: function accept(file, done) {
      if (this.options.maxFilesize && file.size > this.options.maxFilesize * 1024 * 1024) {
        return done(this.options.dictFileTooBig.replace("{{filesize}}", Math.round(file.size / 1024 / 10.24) / 100).replace("{{maxFilesize}}", this.options.maxFilesize));
      } else if (!Dropzone.isValidFile(file, this.options.acceptedFiles)) {
        return done(this.options.dictInvalidFileType);
      } else if (this.options.maxFiles != null && this.getAcceptedFiles().length >= this.options.maxFiles) {
        done(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}", this.options.maxFiles));
        return this.emit("maxfilesexceeded", file);
      } else {
        return this.options.accept.call(this, file, done);
      }
    }
  }, {
    key: "addFile",
    value: function addFile(file) {
      var _this7 = this;

      file.upload = {
        uuid: Dropzone.uuidv4(),
        progress: 0,
        // Setting the total upload size to file.size for the beginning
        // It's actual different than the size to be transmitted.
        total: file.size,
        bytesSent: 0,
        filename: this._renameFile(file),
        chunked: this.options.chunking && (this.options.forceChunking || file.size > this.options.chunkSize),
        totalChunkCount: Math.ceil(file.size / this.options.chunkSize)
      };
      this.files.push(file);

      file.status = Dropzone.ADDED;

      this.emit("addedfile", file);

      this._enqueueThumbnail(file);

      return this.accept(file, function (error) {
        if (error) {
          file.accepted = false;
          _this7._errorProcessing([file], error); // Will set the file.status
        } else {
          file.accepted = true;
          if (_this7.options.autoQueue) {
            _this7.enqueueFile(file);
          } // Will set .accepted = true
        }
        return _this7._updateMaxFilesReachedClass();
      });
    }

    // Wrapper for enqueueFile

  }, {
    key: "enqueueFiles",
    value: function enqueueFiles(files) {
      for (var _iterator17 = files, _isArray17 = true, _i18 = 0, _iterator17 = _isArray17 ? _iterator17 : _iterator17[Symbol.iterator]();;) {
        var _ref16;

        if (_isArray17) {
          if (_i18 >= _iterator17.length) break;
          _ref16 = _iterator17[_i18++];
        } else {
          _i18 = _iterator17.next();
          if (_i18.done) break;
          _ref16 = _i18.value;
        }

        var file = _ref16;

        this.enqueueFile(file);
      }
      return null;
    }
  }, {
    key: "enqueueFile",
    value: function enqueueFile(file) {
      var _this8 = this;

      if (file.status === Dropzone.ADDED && file.accepted === true) {
        file.status = Dropzone.QUEUED;
        if (this.options.autoProcessQueue) {
          return setTimeout(function () {
            return _this8.processQueue();
          }, 0); // Deferring the call
        }
      } else {
        throw new Error("This file can't be queued because it has already been processed or was rejected.");
      }
    }
  }, {
    key: "_enqueueThumbnail",
    value: function _enqueueThumbnail(file) {
      var _this9 = this;

      if (this.options.createImageThumbnails && file.type.match(/image.*/) && file.size <= this.options.maxThumbnailFilesize * 1024 * 1024) {
        this._thumbnailQueue.push(file);
        return setTimeout(function () {
          return _this9._processThumbnailQueue();
        }, 0); // Deferring the call
      }
    }
  }, {
    key: "_processThumbnailQueue",
    value: function _processThumbnailQueue() {
      var _this10 = this;

      if (this._processingThumbnail || this._thumbnailQueue.length === 0) {
        return;
      }

      this._processingThumbnail = true;
      var file = this._thumbnailQueue.shift();
      return this.createThumbnail(file, this.options.thumbnailWidth, this.options.thumbnailHeight, this.options.thumbnailMethod, true, function (dataUrl) {
        _this10.emit("thumbnail", file, dataUrl);
        _this10._processingThumbnail = false;
        return _this10._processThumbnailQueue();
      });
    }

    // Can be called by the user to remove a file

  }, {
    key: "removeFile",
    value: function removeFile(file) {
      if (file.status === Dropzone.UPLOADING) {
        this.cancelUpload(file);
      }
      this.files = without(this.files, file);

      this.emit("removedfile", file);
      if (this.files.length === 0) {
        return this.emit("reset");
      }
    }

    // Removes all files that aren't currently processed from the list

  }, {
    key: "removeAllFiles",
    value: function removeAllFiles(cancelIfNecessary) {
      // Create a copy of files since removeFile() changes the @files array.
      if (cancelIfNecessary == null) {
        cancelIfNecessary = false;
      }
      for (var _iterator18 = this.files.slice(), _isArray18 = true, _i19 = 0, _iterator18 = _isArray18 ? _iterator18 : _iterator18[Symbol.iterator]();;) {
        var _ref17;

        if (_isArray18) {
          if (_i19 >= _iterator18.length) break;
          _ref17 = _iterator18[_i19++];
        } else {
          _i19 = _iterator18.next();
          if (_i19.done) break;
          _ref17 = _i19.value;
        }

        var file = _ref17;

        if (file.status !== Dropzone.UPLOADING || cancelIfNecessary) {
          this.removeFile(file);
        }
      }
      return null;
    }

    // Resizes an image before it gets sent to the server. This function is the default behavior of
    // `options.transformFile` if `resizeWidth` or `resizeHeight` are set. The callback is invoked with
    // the resized blob.

  }, {
    key: "resizeImage",
    value: function resizeImage(file, width, height, resizeMethod, callback) {
      var _this11 = this;

      return this.createThumbnail(file, width, height, resizeMethod, true, function (dataUrl, canvas) {
        if (canvas == null) {
          // The image has not been resized
          return callback(file);
        } else {
          var resizeMimeType = _this11.options.resizeMimeType;

          if (resizeMimeType == null) {
            resizeMimeType = file.type;
          }
          var resizedDataURL = canvas.toDataURL(resizeMimeType, _this11.options.resizeQuality);
          if (resizeMimeType === 'image/jpeg' || resizeMimeType === 'image/jpg') {
            // Now add the original EXIF information
            resizedDataURL = ExifRestore.restore(file.dataURL, resizedDataURL);
          }
          return callback(Dropzone.dataURItoBlob(resizedDataURL));
        }
      });
    }
  }, {
    key: "createThumbnail",
    value: function createThumbnail(file, width, height, resizeMethod, fixOrientation, callback) {
      var _this12 = this;

      var fileReader = new FileReader();

      fileReader.onload = function () {

        file.dataURL = fileReader.result;

        // Don't bother creating a thumbnail for SVG images since they're vector
        if (file.type === "image/svg+xml") {
          if (callback != null) {
            callback(fileReader.result);
          }
          return;
        }

        return _this12.createThumbnailFromUrl(file, width, height, resizeMethod, fixOrientation, callback);
      };

      return fileReader.readAsDataURL(file);
    }
  }, {
    key: "createThumbnailFromUrl",
    value: function createThumbnailFromUrl(file, width, height, resizeMethod, fixOrientation, callback, crossOrigin) {
      var _this13 = this;

      // Not using `new Image` here because of a bug in latest Chrome versions.
      // See https://github.com/enyo/dropzone/pull/226
      var img = document.createElement("img");

      if (crossOrigin) {
        img.crossOrigin = crossOrigin;
      }

      img.onload = function () {
        var loadExif = function loadExif(callback) {
          return callback(1);
        };
        if (typeof EXIF !== 'undefined' && EXIF !== null && fixOrientation) {
          loadExif = function loadExif(callback) {
            return EXIF.getData(img, function () {
              return callback(EXIF.getTag(this, 'Orientation'));
            });
          };
        }

        return loadExif(function (orientation) {
          file.width = img.width;
          file.height = img.height;

          var resizeInfo = _this13.options.resize.call(_this13, file, width, height, resizeMethod);

          var canvas = document.createElement("canvas");
          var ctx = canvas.getContext("2d");

          canvas.width = resizeInfo.trgWidth;
          canvas.height = resizeInfo.trgHeight;

          if (orientation > 4) {
            canvas.width = resizeInfo.trgHeight;
            canvas.height = resizeInfo.trgWidth;
          }

          switch (orientation) {
            case 2:
              // horizontal flip
              ctx.translate(canvas.width, 0);
              ctx.scale(-1, 1);
              break;
            case 3:
              // 180° rotate left
              ctx.translate(canvas.width, canvas.height);
              ctx.rotate(Math.PI);
              break;
            case 4:
              // vertical flip
              ctx.translate(0, canvas.height);
              ctx.scale(1, -1);
              break;
            case 5:
              // vertical flip + 90 rotate right
              ctx.rotate(0.5 * Math.PI);
              ctx.scale(1, -1);
              break;
            case 6:
              // 90° rotate right
              ctx.rotate(0.5 * Math.PI);
              ctx.translate(0, -canvas.width);
              break;
            case 7:
              // horizontal flip + 90 rotate right
              ctx.rotate(0.5 * Math.PI);
              ctx.translate(canvas.height, -canvas.width);
              ctx.scale(-1, 1);
              break;
            case 8:
              // 90° rotate left
              ctx.rotate(-0.5 * Math.PI);
              ctx.translate(-canvas.height, 0);
              break;
          }

          // This is a bugfix for iOS' scaling bug.
          drawImageIOSFix(ctx, img, resizeInfo.srcX != null ? resizeInfo.srcX : 0, resizeInfo.srcY != null ? resizeInfo.srcY : 0, resizeInfo.srcWidth, resizeInfo.srcHeight, resizeInfo.trgX != null ? resizeInfo.trgX : 0, resizeInfo.trgY != null ? resizeInfo.trgY : 0, resizeInfo.trgWidth, resizeInfo.trgHeight);

          var thumbnail = canvas.toDataURL("image/png");

          if (callback != null) {
            return callback(thumbnail, canvas);
          }
        });
      };

      if (callback != null) {
        img.onerror = callback;
      }

      return img.src = file.dataURL;
    }

    // Goes through the queue and processes files if there aren't too many already.

  }, {
    key: "processQueue",
    value: function processQueue() {
      var parallelUploads = this.options.parallelUploads;

      var processingLength = this.getUploadingFiles().length;
      var i = processingLength;

      // There are already at least as many files uploading than should be
      if (processingLength >= parallelUploads) {
        return;
      }

      var queuedFiles = this.getQueuedFiles();

      if (!(queuedFiles.length > 0)) {
        return;
      }

      if (this.options.uploadMultiple) {
        // The files should be uploaded in one request
        return this.processFiles(queuedFiles.slice(0, parallelUploads - processingLength));
      } else {
        while (i < parallelUploads) {
          if (!queuedFiles.length) {
            return;
          } // Nothing left to process
          this.processFile(queuedFiles.shift());
          i++;
        }
      }
    }

    // Wrapper for `processFiles`

  }, {
    key: "processFile",
    value: function processFile(file) {
      return this.processFiles([file]);
    }

    // Loads the file, then calls finishedLoading()

  }, {
    key: "processFiles",
    value: function processFiles(files) {
      for (var _iterator19 = files, _isArray19 = true, _i20 = 0, _iterator19 = _isArray19 ? _iterator19 : _iterator19[Symbol.iterator]();;) {
        var _ref18;

        if (_isArray19) {
          if (_i20 >= _iterator19.length) break;
          _ref18 = _iterator19[_i20++];
        } else {
          _i20 = _iterator19.next();
          if (_i20.done) break;
          _ref18 = _i20.value;
        }

        var file = _ref18;

        file.processing = true; // Backwards compatibility
        file.status = Dropzone.UPLOADING;

        this.emit("processing", file);
      }

      if (this.options.uploadMultiple) {
        this.emit("processingmultiple", files);
      }

      return this.uploadFiles(files);
    }
  }, {
    key: "_getFilesWithXhr",
    value: function _getFilesWithXhr(xhr) {
      var files = void 0;
      return files = this.files.filter(function (file) {
        return file.xhr === xhr;
      }).map(function (file) {
        return file;
      });
    }

    // Cancels the file upload and sets the status to CANCELED
    // **if** the file is actually being uploaded.
    // If it's still in the queue, the file is being removed from it and the status
    // set to CANCELED.

  }, {
    key: "cancelUpload",
    value: function cancelUpload(file) {
      if (file.status === Dropzone.UPLOADING) {
        var groupedFiles = this._getFilesWithXhr(file.xhr);
        for (var _iterator20 = groupedFiles, _isArray20 = true, _i21 = 0, _iterator20 = _isArray20 ? _iterator20 : _iterator20[Symbol.iterator]();;) {
          var _ref19;

          if (_isArray20) {
            if (_i21 >= _iterator20.length) break;
            _ref19 = _iterator20[_i21++];
          } else {
            _i21 = _iterator20.next();
            if (_i21.done) break;
            _ref19 = _i21.value;
          }

          var groupedFile = _ref19;

          groupedFile.status = Dropzone.CANCELED;
        }
        if (typeof file.xhr !== 'undefined') {
          file.xhr.abort();
        }
        for (var _iterator21 = groupedFiles, _isArray21 = true, _i22 = 0, _iterator21 = _isArray21 ? _iterator21 : _iterator21[Symbol.iterator]();;) {
          var _ref20;

          if (_isArray21) {
            if (_i22 >= _iterator21.length) break;
            _ref20 = _iterator21[_i22++];
          } else {
            _i22 = _iterator21.next();
            if (_i22.done) break;
            _ref20 = _i22.value;
          }

          var _groupedFile = _ref20;

          this.emit("canceled", _groupedFile);
        }
        if (this.options.uploadMultiple) {
          this.emit("canceledmultiple", groupedFiles);
        }
      } else if (file.status === Dropzone.ADDED || file.status === Dropzone.QUEUED) {
        file.status = Dropzone.CANCELED;
        this.emit("canceled", file);
        if (this.options.uploadMultiple) {
          this.emit("canceledmultiple", [file]);
        }
      }

      if (this.options.autoProcessQueue) {
        return this.processQueue();
      }
    }
  }, {
    key: "resolveOption",
    value: function resolveOption(option) {
      if (typeof option === 'function') {
        for (var _len3 = arguments.length, args = Array(_len3 > 1 ? _len3 - 1 : 0), _key3 = 1; _key3 < _len3; _key3++) {
          args[_key3 - 1] = arguments[_key3];
        }

        return option.apply(this, args);
      }
      return option;
    }
  }, {
    key: "uploadFile",
    value: function uploadFile(file) {
      return this.uploadFiles([file]);
    }
  }, {
    key: "uploadFiles",
    value: function uploadFiles(files) {
      var _this14 = this;

      this._transformFiles(files, function (transformedFiles) {
        if (files[0].upload.chunked) {
          // This file should be sent in chunks!

          // If the chunking option is set, we **know** that there can only be **one** file, since
          // uploadMultiple is not allowed with this option.
          var file = files[0];
          var transformedFile = transformedFiles[0];
          var startedChunkCount = 0;

          file.upload.chunks = [];

          var handleNextChunk = function handleNextChunk() {
            var chunkIndex = 0;

            // Find the next item in file.upload.chunks that is not defined yet.
            while (file.upload.chunks[chunkIndex] !== undefined) {
              chunkIndex++;
            }

            // This means, that all chunks have already been started.
            if (chunkIndex >= file.upload.totalChunkCount) return;

            startedChunkCount++;

            var start = chunkIndex * _this14.options.chunkSize;
            var end = Math.min(start + _this14.options.chunkSize, file.size);

            var dataBlock = {
              name: _this14._getParamName(0),
              data: transformedFile.webkitSlice ? transformedFile.webkitSlice(start, end) : transformedFile.slice(start, end),
              filename: file.upload.filename,
              chunkIndex: chunkIndex
            };

            file.upload.chunks[chunkIndex] = {
              file: file,
              index: chunkIndex,
              dataBlock: dataBlock, // In case we want to retry.
              status: Dropzone.UPLOADING,
              progress: 0,
              retries: 0 // The number of times this block has been retried.
            };

            _this14._uploadData(files, [dataBlock]);
          };

          file.upload.finishedChunkUpload = function (chunk) {
            var allFinished = true;
            chunk.status = Dropzone.SUCCESS;

            // Clear the data from the chunk
            chunk.dataBlock = null;
            // Leaving this reference to xhr intact here will cause memory leaks in some browsers
            chunk.xhr = null;

            for (var i = 0; i < file.upload.totalChunkCount; i++) {
              if (file.upload.chunks[i] === undefined) {
                return handleNextChunk();
              }
              if (file.upload.chunks[i].status !== Dropzone.SUCCESS) {
                allFinished = false;
              }
            }

            if (allFinished) {
              _this14.options.chunksUploaded(file, function () {
                _this14._finished(files, '', null);
              });
            }
          };

          if (_this14.options.parallelChunkUploads) {
            for (var i = 0; i < file.upload.totalChunkCount; i++) {
              handleNextChunk();
            }
          } else {
            handleNextChunk();
          }
        } else {
          var dataBlocks = [];
          for (var _i23 = 0; _i23 < files.length; _i23++) {
            dataBlocks[_i23] = {
              name: _this14._getParamName(_i23),
              data: transformedFiles[_i23],
              filename: files[_i23].upload.filename
            };
          }
          _this14._uploadData(files, dataBlocks);
        }
      });
    }

    /// Returns the right chunk for given file and xhr

  }, {
    key: "_getChunk",
    value: function _getChunk(file, xhr) {
      for (var i = 0; i < file.upload.totalChunkCount; i++) {
        if (file.upload.chunks[i] !== undefined && file.upload.chunks[i].xhr === xhr) {
          return file.upload.chunks[i];
        }
      }
    }

    // This function actually uploads the file(s) to the server.
    // If dataBlocks contains the actual data to upload (meaning, that this could either be transformed
    // files, or individual chunks for chunked upload).

  }, {
    key: "_uploadData",
    value: function _uploadData(files, dataBlocks) {
      var _this15 = this;

      var xhr = new XMLHttpRequest();

      // Put the xhr object in the file objects to be able to reference it later.
      for (var _iterator22 = files, _isArray22 = true, _i24 = 0, _iterator22 = _isArray22 ? _iterator22 : _iterator22[Symbol.iterator]();;) {
        var _ref21;

        if (_isArray22) {
          if (_i24 >= _iterator22.length) break;
          _ref21 = _iterator22[_i24++];
        } else {
          _i24 = _iterator22.next();
          if (_i24.done) break;
          _ref21 = _i24.value;
        }

        var file = _ref21;

        file.xhr = xhr;
      }
      if (files[0].upload.chunked) {
        // Put the xhr object in the right chunk object, so it can be associated later, and found with _getChunk
        files[0].upload.chunks[dataBlocks[0].chunkIndex].xhr = xhr;
      }

      var method = this.resolveOption(this.options.method, files);
      var url = this.resolveOption(this.options.url, files);
      xhr.open(method, url, true);

      // Setting the timeout after open because of IE11 issue: https://gitlab.com/meno/dropzone/issues/8
      xhr.timeout = this.resolveOption(this.options.timeout, files);

      // Has to be after `.open()`. See https://github.com/enyo/dropzone/issues/179
      xhr.withCredentials = !!this.options.withCredentials;

      xhr.onload = function (e) {
        _this15._finishedUploading(files, xhr, e);
      };

      xhr.onerror = function () {
        _this15._handleUploadError(files, xhr);
      };

      // Some browsers do not have the .upload property
      var progressObj = xhr.upload != null ? xhr.upload : xhr;
      progressObj.onprogress = function (e) {
        return _this15._updateFilesUploadProgress(files, xhr, e);
      };

      var headers = {
        "Accept": "application/json",
        "Cache-Control": "no-cache",
        "X-Requested-With": "XMLHttpRequest"
      };

      if (this.options.headers) {
        Dropzone.extend(headers, this.options.headers);
      }

      for (var headerName in headers) {
        var headerValue = headers[headerName];
        if (headerValue) {
          xhr.setRequestHeader(headerName, headerValue);
        }
      }

      var formData = new FormData();

      // Adding all @options parameters
      if (this.options.params) {
        var additionalParams = this.options.params;
        if (typeof additionalParams === 'function') {
          additionalParams = additionalParams.call(this, files, xhr, files[0].upload.chunked ? this._getChunk(files[0], xhr) : null);
        }

        for (var key in additionalParams) {
          var value = additionalParams[key];
          formData.append(key, value);
        }
      }

      // Let the user add additional data if necessary
      for (var _iterator23 = files, _isArray23 = true, _i25 = 0, _iterator23 = _isArray23 ? _iterator23 : _iterator23[Symbol.iterator]();;) {
        var _ref22;

        if (_isArray23) {
          if (_i25 >= _iterator23.length) break;
          _ref22 = _iterator23[_i25++];
        } else {
          _i25 = _iterator23.next();
          if (_i25.done) break;
          _ref22 = _i25.value;
        }

        var _file = _ref22;

        this.emit("sending", _file, xhr, formData);
      }
      if (this.options.uploadMultiple) {
        this.emit("sendingmultiple", files, xhr, formData);
      }

      this._addFormElementData(formData);

      // Finally add the files
      // Has to be last because some servers (eg: S3) expect the file to be the last parameter
      for (var i = 0; i < dataBlocks.length; i++) {
        var dataBlock = dataBlocks[i];
        formData.append(dataBlock.name, dataBlock.data, dataBlock.filename);
      }

      this.submitRequest(xhr, formData, files);
    }

    // Transforms all files with this.options.transformFile and invokes done with the transformed files when done.

  }, {
    key: "_transformFiles",
    value: function _transformFiles(files, done) {
      var _this16 = this;

      var transformedFiles = [];
      // Clumsy way of handling asynchronous calls, until I get to add a proper Future library.
      var doneCounter = 0;

      var _loop = function _loop(i) {
        _this16.options.transformFile.call(_this16, files[i], function (transformedFile) {
          transformedFiles[i] = transformedFile;
          if (++doneCounter === files.length) {
            done(transformedFiles);
          }
        });
      };

      for (var i = 0; i < files.length; i++) {
        _loop(i);
      }
    }

    // Takes care of adding other input elements of the form to the AJAX request

  }, {
    key: "_addFormElementData",
    value: function _addFormElementData(formData) {
      // Take care of other input elements
      if (this.element.tagName === "FORM") {
        for (var _iterator24 = this.element.querySelectorAll("input, textarea, select, button"), _isArray24 = true, _i26 = 0, _iterator24 = _isArray24 ? _iterator24 : _iterator24[Symbol.iterator]();;) {
          var _ref23;

          if (_isArray24) {
            if (_i26 >= _iterator24.length) break;
            _ref23 = _iterator24[_i26++];
          } else {
            _i26 = _iterator24.next();
            if (_i26.done) break;
            _ref23 = _i26.value;
          }

          var input = _ref23;

          var inputName = input.getAttribute("name");
          var inputType = input.getAttribute("type");
          if (inputType) inputType = inputType.toLowerCase();

          // If the input doesn't have a name, we can't use it.
          if (typeof inputName === 'undefined' || inputName === null) continue;

          if (input.tagName === "SELECT" && input.hasAttribute("multiple")) {
            // Possibly multiple values
            for (var _iterator25 = input.options, _isArray25 = true, _i27 = 0, _iterator25 = _isArray25 ? _iterator25 : _iterator25[Symbol.iterator]();;) {
              var _ref24;

              if (_isArray25) {
                if (_i27 >= _iterator25.length) break;
                _ref24 = _iterator25[_i27++];
              } else {
                _i27 = _iterator25.next();
                if (_i27.done) break;
                _ref24 = _i27.value;
              }

              var option = _ref24;

              if (option.selected) {
                formData.append(inputName, option.value);
              }
            }
          } else if (!inputType || inputType !== "checkbox" && inputType !== "radio" || input.checked) {
            formData.append(inputName, input.value);
          }
        }
      }
    }

    // Invoked when there is new progress information about given files.
    // If e is not provided, it is assumed that the upload is finished.

  }, {
    key: "_updateFilesUploadProgress",
    value: function _updateFilesUploadProgress(files, xhr, e) {
      var progress = void 0;
      if (typeof e !== 'undefined') {
        progress = 100 * e.loaded / e.total;

        if (files[0].upload.chunked) {
          var file = files[0];
          // Since this is a chunked upload, we need to update the appropriate chunk progress.
          var chunk = this._getChunk(file, xhr);
          chunk.progress = progress;
          chunk.total = e.total;
          chunk.bytesSent = e.loaded;
          var fileProgress = 0,
              fileTotal = void 0,
              fileBytesSent = void 0;
          file.upload.progress = 0;
          file.upload.total = 0;
          file.upload.bytesSent = 0;
          for (var i = 0; i < file.upload.totalChunkCount; i++) {
            if (file.upload.chunks[i] !== undefined && file.upload.chunks[i].progress !== undefined) {
              file.upload.progress += file.upload.chunks[i].progress;
              file.upload.total += file.upload.chunks[i].total;
              file.upload.bytesSent += file.upload.chunks[i].bytesSent;
            }
          }
          file.upload.progress = file.upload.progress / file.upload.totalChunkCount;
        } else {
          for (var _iterator26 = files, _isArray26 = true, _i28 = 0, _iterator26 = _isArray26 ? _iterator26 : _iterator26[Symbol.iterator]();;) {
            var _ref25;

            if (_isArray26) {
              if (_i28 >= _iterator26.length) break;
              _ref25 = _iterator26[_i28++];
            } else {
              _i28 = _iterator26.next();
              if (_i28.done) break;
              _ref25 = _i28.value;
            }

            var _file2 = _ref25;

            _file2.upload.progress = progress;
            _file2.upload.total = e.total;
            _file2.upload.bytesSent = e.loaded;
          }
        }
        for (var _iterator27 = files, _isArray27 = true, _i29 = 0, _iterator27 = _isArray27 ? _iterator27 : _iterator27[Symbol.iterator]();;) {
          var _ref26;

          if (_isArray27) {
            if (_i29 >= _iterator27.length) break;
            _ref26 = _iterator27[_i29++];
          } else {
            _i29 = _iterator27.next();
            if (_i29.done) break;
            _ref26 = _i29.value;
          }

          var _file3 = _ref26;

          this.emit("uploadprogress", _file3, _file3.upload.progress, _file3.upload.bytesSent);
        }
      } else {
        // Called when the file finished uploading

        var allFilesFinished = true;

        progress = 100;

        for (var _iterator28 = files, _isArray28 = true, _i30 = 0, _iterator28 = _isArray28 ? _iterator28 : _iterator28[Symbol.iterator]();;) {
          var _ref27;

          if (_isArray28) {
            if (_i30 >= _iterator28.length) break;
            _ref27 = _iterator28[_i30++];
          } else {
            _i30 = _iterator28.next();
            if (_i30.done) break;
            _ref27 = _i30.value;
          }

          var _file4 = _ref27;

          if (_file4.upload.progress !== 100 || _file4.upload.bytesSent !== _file4.upload.total) {
            allFilesFinished = false;
          }
          _file4.upload.progress = progress;
          _file4.upload.bytesSent = _file4.upload.total;
        }

        // Nothing to do, all files already at 100%
        if (allFilesFinished) {
          return;
        }

        for (var _iterator29 = files, _isArray29 = true, _i31 = 0, _iterator29 = _isArray29 ? _iterator29 : _iterator29[Symbol.iterator]();;) {
          var _ref28;

          if (_isArray29) {
            if (_i31 >= _iterator29.length) break;
            _ref28 = _iterator29[_i31++];
          } else {
            _i31 = _iterator29.next();
            if (_i31.done) break;
            _ref28 = _i31.value;
          }

          var _file5 = _ref28;

          this.emit("uploadprogress", _file5, progress, _file5.upload.bytesSent);
        }
      }
    }
  }, {
    key: "_finishedUploading",
    value: function _finishedUploading(files, xhr, e) {
      var response = void 0;

      if (files[0].status === Dropzone.CANCELED) {
        return;
      }

      if (xhr.readyState !== 4) {
        return;
      }

      if (xhr.responseType !== 'arraybuffer' && xhr.responseType !== 'blob') {
        response = xhr.responseText;

        if (xhr.getResponseHeader("content-type") && ~xhr.getResponseHeader("content-type").indexOf("application/json")) {
          try {
            response = JSON.parse(response);
          } catch (error) {
            e = error;
            response = "Invalid JSON response from server.";
          }
        }
      }

      this._updateFilesUploadProgress(files);

      if (!(200 <= xhr.status && xhr.status < 300)) {
        this._handleUploadError(files, xhr, response);
      } else {
        if (files[0].upload.chunked) {
          files[0].upload.finishedChunkUpload(this._getChunk(files[0], xhr));
        } else {
          this._finished(files, response, e);
        }
      }
    }
  }, {
    key: "_handleUploadError",
    value: function _handleUploadError(files, xhr, response) {
      if (files[0].status === Dropzone.CANCELED) {
        return;
      }

      if (files[0].upload.chunked && this.options.retryChunks) {
        var chunk = this._getChunk(files[0], xhr);
        if (chunk.retries++ < this.options.retryChunksLimit) {
          this._uploadData(files, [chunk.dataBlock]);
          return;
        } else {
          console.warn('Retried this chunk too often. Giving up.');
        }
      }

      for (var _iterator30 = files, _isArray30 = true, _i32 = 0, _iterator30 = _isArray30 ? _iterator30 : _iterator30[Symbol.iterator]();;) {
        var _ref29;

        if (_isArray30) {
          if (_i32 >= _iterator30.length) break;
          _ref29 = _iterator30[_i32++];
        } else {
          _i32 = _iterator30.next();
          if (_i32.done) break;
          _ref29 = _i32.value;
        }

        var file = _ref29;

        this._errorProcessing(files, response || this.options.dictResponseError.replace("{{statusCode}}", xhr.status), xhr);
      }
    }
  }, {
    key: "submitRequest",
    value: function submitRequest(xhr, formData, files) {
      xhr.send(formData);
    }

    // Called internally when processing is finished.
    // Individual callbacks have to be called in the appropriate sections.

  }, {
    key: "_finished",
    value: function _finished(files, responseText, e) {
      for (var _iterator31 = files, _isArray31 = true, _i33 = 0, _iterator31 = _isArray31 ? _iterator31 : _iterator31[Symbol.iterator]();;) {
        var _ref30;

        if (_isArray31) {
          if (_i33 >= _iterator31.length) break;
          _ref30 = _iterator31[_i33++];
        } else {
          _i33 = _iterator31.next();
          if (_i33.done) break;
          _ref30 = _i33.value;
        }

        var file = _ref30;

        file.status = Dropzone.SUCCESS;
        this.emit("success", file, responseText, e);
        this.emit("complete", file);
      }
      if (this.options.uploadMultiple) {
        this.emit("successmultiple", files, responseText, e);
        this.emit("completemultiple", files);
      }

      if (this.options.autoProcessQueue) {
        return this.processQueue();
      }
    }

    // Called internally when processing is finished.
    // Individual callbacks have to be called in the appropriate sections.

  }, {
    key: "_errorProcessing",
    value: function _errorProcessing(files, message, xhr) {
      for (var _iterator32 = files, _isArray32 = true, _i34 = 0, _iterator32 = _isArray32 ? _iterator32 : _iterator32[Symbol.iterator]();;) {
        var _ref31;

        if (_isArray32) {
          if (_i34 >= _iterator32.length) break;
          _ref31 = _iterator32[_i34++];
        } else {
          _i34 = _iterator32.next();
          if (_i34.done) break;
          _ref31 = _i34.value;
        }

        var file = _ref31;

        file.status = Dropzone.ERROR;
        this.emit("error", file, message, xhr);
        this.emit("complete", file);
      }
      if (this.options.uploadMultiple) {
        this.emit("errormultiple", files, message, xhr);
        this.emit("completemultiple", files);
      }

      if (this.options.autoProcessQueue) {
        return this.processQueue();
      }
    }
  }], [{
    key: "uuidv4",
    value: function uuidv4() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0,
            v = c === 'x' ? r : r & 0x3 | 0x8;
        return v.toString(16);
      });
    }
  }]);

  return Dropzone;
}(Emitter);

Dropzone.initClass();

Dropzone.version = "5.5.1";

// This is a map of options for your different dropzones. Add configurations
// to this object for your different dropzone elemens.
//
// Example:
//
//     Dropzone.options.myDropzoneElementId = { maxFilesize: 1 };
//
// To disable autoDiscover for a specific element, you can set `false` as an option:
//
//     Dropzone.options.myDisabledElementId = false;
//
// And in html:
//
//     <form action="/upload" id="my-dropzone-element-id" class="dropzone"></form>
Dropzone.options = {};

// Returns the options for an element or undefined if none available.
Dropzone.optionsForElement = function (element) {
  // Get the `Dropzone.options.elementId` for this element if it exists
  if (element.getAttribute("id")) {
    return Dropzone.options[camelize(element.getAttribute("id"))];
  } else {
    return undefined;
  }
};

// Holds a list of all dropzone instances
Dropzone.instances = [];

// Returns the dropzone for given element if any
Dropzone.forElement = function (element) {
  if (typeof element === "string") {
    element = document.querySelector(element);
  }
  if ((element != null ? element.dropzone : undefined) == null) {
    throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");
  }
  return element.dropzone;
};

// Set to false if you don't want Dropzone to automatically find and attach to .dropzone elements.
Dropzone.autoDiscover = true;

// Looks for all .dropzone elements and creates a dropzone for them
Dropzone.discover = function () {
  var dropzones = void 0;
  if (document.querySelectorAll) {
    dropzones = document.querySelectorAll(".dropzone");
  } else {
    dropzones = [];
    // IE :(
    var checkElements = function checkElements(elements) {
      return function () {
        var result = [];
        for (var _iterator33 = elements, _isArray33 = true, _i35 = 0, _iterator33 = _isArray33 ? _iterator33 : _iterator33[Symbol.iterator]();;) {
          var _ref32;

          if (_isArray33) {
            if (_i35 >= _iterator33.length) break;
            _ref32 = _iterator33[_i35++];
          } else {
            _i35 = _iterator33.next();
            if (_i35.done) break;
            _ref32 = _i35.value;
          }

          var el = _ref32;

          if (/(^| )dropzone($| )/.test(el.className)) {
            result.push(dropzones.push(el));
          } else {
            result.push(undefined);
          }
        }
        return result;
      }();
    };
    checkElements(document.getElementsByTagName("div"));
    checkElements(document.getElementsByTagName("form"));
  }

  return function () {
    var result = [];
    for (var _iterator34 = dropzones, _isArray34 = true, _i36 = 0, _iterator34 = _isArray34 ? _iterator34 : _iterator34[Symbol.iterator]();;) {
      var _ref33;

      if (_isArray34) {
        if (_i36 >= _iterator34.length) break;
        _ref33 = _iterator34[_i36++];
      } else {
        _i36 = _iterator34.next();
        if (_i36.done) break;
        _ref33 = _i36.value;
      }

      var dropzone = _ref33;

      // Create a dropzone unless auto discover has been disabled for specific element
      if (Dropzone.optionsForElement(dropzone) !== false) {
        result.push(new Dropzone(dropzone));
      } else {
        result.push(undefined);
      }
    }
    return result;
  }();
};

// Since the whole Drag'n'Drop API is pretty new, some browsers implement it,
// but not correctly.
// So I created a blacklist of userAgents. Yes, yes. Browser sniffing, I know.
// But what to do when browsers *theoretically* support an API, but crash
// when using it.
//
// This is a list of regular expressions tested against navigator.userAgent
//
// ** It should only be used on browser that *do* support the API, but
// incorrectly **
//
Dropzone.blacklistedBrowsers = [
// The mac os and windows phone version of opera 12 seems to have a problem with the File drag'n'drop API.
/opera.*(Macintosh|Windows Phone).*version\/12/i];

// Checks if the browser is supported
Dropzone.isBrowserSupported = function () {
  var capableBrowser = true;

  if (window.File && window.FileReader && window.FileList && window.Blob && window.FormData && document.querySelector) {
    if (!("classList" in document.createElement("a"))) {
      capableBrowser = false;
    } else {
      // The browser supports the API, but may be blacklisted.
      for (var _iterator35 = Dropzone.blacklistedBrowsers, _isArray35 = true, _i37 = 0, _iterator35 = _isArray35 ? _iterator35 : _iterator35[Symbol.iterator]();;) {
        var _ref34;

        if (_isArray35) {
          if (_i37 >= _iterator35.length) break;
          _ref34 = _iterator35[_i37++];
        } else {
          _i37 = _iterator35.next();
          if (_i37.done) break;
          _ref34 = _i37.value;
        }

        var regex = _ref34;

        if (regex.test(navigator.userAgent)) {
          capableBrowser = false;
          continue;
        }
      }
    }
  } else {
    capableBrowser = false;
  }

  return capableBrowser;
};

Dropzone.dataURItoBlob = function (dataURI) {
  // convert base64 to raw binary data held in a string
  // doesn't handle URLEncoded DataURIs - see SO answer #6850276 for code that does this
  var byteString = atob(dataURI.split(',')[1]);

  // separate out the mime component
  var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

  // write the bytes of the string to an ArrayBuffer
  var ab = new ArrayBuffer(byteString.length);
  var ia = new Uint8Array(ab);
  for (var i = 0, end = byteString.length, asc = 0 <= end; asc ? i <= end : i >= end; asc ? i++ : i--) {
    ia[i] = byteString.charCodeAt(i);
  }

  // write the ArrayBuffer to a blob
  return new Blob([ab], { type: mimeString });
};

// Returns an array without the rejected item
var without = function without(list, rejectedItem) {
  return list.filter(function (item) {
    return item !== rejectedItem;
  }).map(function (item) {
    return item;
  });
};

// abc-def_ghi -> abcDefGhi
var camelize = function camelize(str) {
  return str.replace(/[\-_](\w)/g, function (match) {
    return match.charAt(1).toUpperCase();
  });
};

// Creates an element from string
Dropzone.createElement = function (string) {
  var div = document.createElement("div");
  div.innerHTML = string;
  return div.childNodes[0];
};

// Tests if given element is inside (or simply is) the container
Dropzone.elementInside = function (element, container) {
  if (element === container) {
    return true;
  } // Coffeescript doesn't support do/while loops
  while (element = element.parentNode) {
    if (element === container) {
      return true;
    }
  }
  return false;
};

Dropzone.getElement = function (el, name) {
  var element = void 0;
  if (typeof el === "string") {
    element = document.querySelector(el);
  } else if (el.nodeType != null) {
    element = el;
  }
  if (element == null) {
    throw new Error("Invalid `" + name + "` option provided. Please provide a CSS selector or a plain HTML element.");
  }
  return element;
};

Dropzone.getElements = function (els, name) {
  var el = void 0,
      elements = void 0;
  if (els instanceof Array) {
    elements = [];
    try {
      for (var _iterator36 = els, _isArray36 = true, _i38 = 0, _iterator36 = _isArray36 ? _iterator36 : _iterator36[Symbol.iterator]();;) {
        if (_isArray36) {
          if (_i38 >= _iterator36.length) break;
          el = _iterator36[_i38++];
        } else {
          _i38 = _iterator36.next();
          if (_i38.done) break;
          el = _i38.value;
        }

        elements.push(this.getElement(el, name));
      }
    } catch (e) {
      elements = null;
    }
  } else if (typeof els === "string") {
    elements = [];
    for (var _iterator37 = document.querySelectorAll(els), _isArray37 = true, _i39 = 0, _iterator37 = _isArray37 ? _iterator37 : _iterator37[Symbol.iterator]();;) {
      if (_isArray37) {
        if (_i39 >= _iterator37.length) break;
        el = _iterator37[_i39++];
      } else {
        _i39 = _iterator37.next();
        if (_i39.done) break;
        el = _i39.value;
      }

      elements.push(el);
    }
  } else if (els.nodeType != null) {
    elements = [els];
  }

  if (elements == null || !elements.length) {
    throw new Error("Invalid `" + name + "` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");
  }

  return elements;
};

// Asks the user the question and calls accepted or rejected accordingly
//
// The default implementation just uses `window.confirm` and then calls the
// appropriate callback.
Dropzone.confirm = function (question, accepted, rejected) {
  if (window.confirm(question)) {
    return accepted();
  } else if (rejected != null) {
    return rejected();
  }
};

// Validates the mime type like this:
//
// https://developer.mozilla.org/en-US/docs/HTML/Element/input#attr-accept
Dropzone.isValidFile = function (file, acceptedFiles) {
  if (!acceptedFiles) {
    return true;
  } // If there are no accepted mime types, it's OK
  acceptedFiles = acceptedFiles.split(",");

  var mimeType = file.type;
  var baseMimeType = mimeType.replace(/\/.*$/, "");

  for (var _iterator38 = acceptedFiles, _isArray38 = true, _i40 = 0, _iterator38 = _isArray38 ? _iterator38 : _iterator38[Symbol.iterator]();;) {
    var _ref35;

    if (_isArray38) {
      if (_i40 >= _iterator38.length) break;
      _ref35 = _iterator38[_i40++];
    } else {
      _i40 = _iterator38.next();
      if (_i40.done) break;
      _ref35 = _i40.value;
    }

    var validType = _ref35;

    validType = validType.trim();
    if (validType.charAt(0) === ".") {
      if (file.name.toLowerCase().indexOf(validType.toLowerCase(), file.name.length - validType.length) !== -1) {
        return true;
      }
    } else if (/\/\*$/.test(validType)) {
      // This is something like a image/* mime type
      if (baseMimeType === validType.replace(/\/.*$/, "")) {
        return true;
      }
    } else {
      if (mimeType === validType) {
        return true;
      }
    }
  }

  return false;
};

// Augment jQuery
if (typeof jQuery !== 'undefined' && jQuery !== null) {
  jQuery.fn.dropzone = function (options) {
    return this.each(function () {
      return new Dropzone(this, options);
    });
  };
}

if (typeof module !== 'undefined' && module !== null) {
  module.exports = Dropzone;
} else {
  window.Dropzone = Dropzone;
}

// Dropzone file status codes
Dropzone.ADDED = "added";

Dropzone.QUEUED = "queued";
// For backwards compatibility. Now, if a file is accepted, it's either queued
// or uploading.
Dropzone.ACCEPTED = Dropzone.QUEUED;

Dropzone.UPLOADING = "uploading";
Dropzone.PROCESSING = Dropzone.UPLOADING; // alias

Dropzone.CANCELED = "canceled";
Dropzone.ERROR = "error";
Dropzone.SUCCESS = "success";

/*

 Bugfix for iOS 6 and 7
 Source: http://stackoverflow.com/questions/11929099/html5-canvas-drawimage-ratio-bug-ios
 based on the work of https://github.com/stomita/ios-imagefile-megapixel

 */

// Detecting vertical squash in loaded image.
// Fixes a bug which squash image vertically while drawing into canvas for some images.
// This is a bug in iOS6 devices. This function from https://github.com/stomita/ios-imagefile-megapixel
var detectVerticalSquash = function detectVerticalSquash(img) {
  var iw = img.naturalWidth;
  var ih = img.naturalHeight;
  var canvas = document.createElement("canvas");
  canvas.width = 1;
  canvas.height = ih;
  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0);

  var _ctx$getImageData = ctx.getImageData(1, 0, 1, ih),
      data = _ctx$getImageData.data;

  // search image edge pixel position in case it is squashed vertically.


  var sy = 0;
  var ey = ih;
  var py = ih;
  while (py > sy) {
    var alpha = data[(py - 1) * 4 + 3];

    if (alpha === 0) {
      ey = py;
    } else {
      sy = py;
    }

    py = ey + sy >> 1;
  }
  var ratio = py / ih;

  if (ratio === 0) {
    return 1;
  } else {
    return ratio;
  }
};

// A replacement for context.drawImage
// (args are for source and destination).
var drawImageIOSFix = function drawImageIOSFix(ctx, img, sx, sy, sw, sh, dx, dy, dw, dh) {
  var vertSquashRatio = detectVerticalSquash(img);
  return ctx.drawImage(img, sx, sy, sw, sh, dx, dy, dw, dh / vertSquashRatio);
};

// Based on MinifyJpeg
// Source: http://www.perry.cz/files/ExifRestorer.js
// http://elicon.blog57.fc2.com/blog-entry-206.html

var ExifRestore = function () {
  function ExifRestore() {
    _classCallCheck(this, ExifRestore);
  }

  _createClass(ExifRestore, null, [{
    key: "initClass",
    value: function initClass() {
      this.KEY_STR = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
    }
  }, {
    key: "encode64",
    value: function encode64(input) {
      var output = '';
      var chr1 = undefined;
      var chr2 = undefined;
      var chr3 = '';
      var enc1 = undefined;
      var enc2 = undefined;
      var enc3 = undefined;
      var enc4 = '';
      var i = 0;
      while (true) {
        chr1 = input[i++];
        chr2 = input[i++];
        chr3 = input[i++];
        enc1 = chr1 >> 2;
        enc2 = (chr1 & 3) << 4 | chr2 >> 4;
        enc3 = (chr2 & 15) << 2 | chr3 >> 6;
        enc4 = chr3 & 63;
        if (isNaN(chr2)) {
          enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
          enc4 = 64;
        }
        output = output + this.KEY_STR.charAt(enc1) + this.KEY_STR.charAt(enc2) + this.KEY_STR.charAt(enc3) + this.KEY_STR.charAt(enc4);
        chr1 = chr2 = chr3 = '';
        enc1 = enc2 = enc3 = enc4 = '';
        if (!(i < input.length)) {
          break;
        }
      }
      return output;
    }
  }, {
    key: "restore",
    value: function restore(origFileBase64, resizedFileBase64) {
      if (!origFileBase64.match('data:image/jpeg;base64,')) {
        return resizedFileBase64;
      }
      var rawImage = this.decode64(origFileBase64.replace('data:image/jpeg;base64,', ''));
      var segments = this.slice2Segments(rawImage);
      var image = this.exifManipulation(resizedFileBase64, segments);
      return "data:image/jpeg;base64," + this.encode64(image);
    }
  }, {
    key: "exifManipulation",
    value: function exifManipulation(resizedFileBase64, segments) {
      var exifArray = this.getExifArray(segments);
      var newImageArray = this.insertExif(resizedFileBase64, exifArray);
      var aBuffer = new Uint8Array(newImageArray);
      return aBuffer;
    }
  }, {
    key: "getExifArray",
    value: function getExifArray(segments) {
      var seg = undefined;
      var x = 0;
      while (x < segments.length) {
        seg = segments[x];
        if (seg[0] === 255 & seg[1] === 225) {
          return seg;
        }
        x++;
      }
      return [];
    }
  }, {
    key: "insertExif",
    value: function insertExif(resizedFileBase64, exifArray) {
      var imageData = resizedFileBase64.replace('data:image/jpeg;base64,', '');
      var buf = this.decode64(imageData);
      var separatePoint = buf.indexOf(255, 3);
      var mae = buf.slice(0, separatePoint);
      var ato = buf.slice(separatePoint);
      var array = mae;
      array = array.concat(exifArray);
      array = array.concat(ato);
      return array;
    }
  }, {
    key: "slice2Segments",
    value: function slice2Segments(rawImageArray) {
      var head = 0;
      var segments = [];
      while (true) {
        var length;
        if (rawImageArray[head] === 255 & rawImageArray[head + 1] === 218) {
          break;
        }
        if (rawImageArray[head] === 255 & rawImageArray[head + 1] === 216) {
          head += 2;
        } else {
          length = rawImageArray[head + 2] * 256 + rawImageArray[head + 3];
          var endPoint = head + length + 2;
          var seg = rawImageArray.slice(head, endPoint);
          segments.push(seg);
          head = endPoint;
        }
        if (head > rawImageArray.length) {
          break;
        }
      }
      return segments;
    }
  }, {
    key: "decode64",
    value: function decode64(input) {
      var output = '';
      var chr1 = undefined;
      var chr2 = undefined;
      var chr3 = '';
      var enc1 = undefined;
      var enc2 = undefined;
      var enc3 = undefined;
      var enc4 = '';
      var i = 0;
      var buf = [];
      // remove all characters that are not A-Z, a-z, 0-9, +, /, or =
      var base64test = /[^A-Za-z0-9\+\/\=]/g;
      if (base64test.exec(input)) {
        console.warn('There were invalid base64 characters in the input text.\nValid base64 characters are A-Z, a-z, 0-9, \'+\', \'/\',and \'=\'\nExpect errors in decoding.');
      }
      input = input.replace(/[^A-Za-z0-9\+\/\=]/g, '');
      while (true) {
        enc1 = this.KEY_STR.indexOf(input.charAt(i++));
        enc2 = this.KEY_STR.indexOf(input.charAt(i++));
        enc3 = this.KEY_STR.indexOf(input.charAt(i++));
        enc4 = this.KEY_STR.indexOf(input.charAt(i++));
        chr1 = enc1 << 2 | enc2 >> 4;
        chr2 = (enc2 & 15) << 4 | enc3 >> 2;
        chr3 = (enc3 & 3) << 6 | enc4;
        buf.push(chr1);
        if (enc3 !== 64) {
          buf.push(chr2);
        }
        if (enc4 !== 64) {
          buf.push(chr3);
        }
        chr1 = chr2 = chr3 = '';
        enc1 = enc2 = enc3 = enc4 = '';
        if (!(i < input.length)) {
          break;
        }
      }
      return buf;
    }
  }]);

  return ExifRestore;
}();

ExifRestore.initClass();

/*
 * contentloaded.js
 *
 * Author: Diego Perini (diego.perini at gmail.com)
 * Summary: cross-browser wrapper for DOMContentLoaded
 * Updated: 20101020
 * License: MIT
 * Version: 1.2
 *
 * URL:
 * http://javascript.nwbox.com/ContentLoaded/
 * http://javascript.nwbox.com/ContentLoaded/MIT-LICENSE
 */

// @win window reference
// @fn function reference
var contentLoaded = function contentLoaded(win, fn) {
  var done = false;
  var top = true;
  var doc = win.document;
  var root = doc.documentElement;
  var add = doc.addEventListener ? "addEventListener" : "attachEvent";
  var rem = doc.addEventListener ? "removeEventListener" : "detachEvent";
  var pre = doc.addEventListener ? "" : "on";
  var init = function init(e) {
    if (e.type === "readystatechange" && doc.readyState !== "complete") {
      return;
    }
    (e.type === "load" ? win : doc)[rem](pre + e.type, init, false);
    if (!done && (done = true)) {
      return fn.call(win, e.type || e);
    }
  };

  var poll = function poll() {
    try {
      root.doScroll("left");
    } catch (e) {
      setTimeout(poll, 50);
      return;
    }
    return init("poll");
  };

  if (doc.readyState !== "complete") {
    if (doc.createEventObject && root.doScroll) {
      try {
        top = !win.frameElement;
      } catch (error) {}
      if (top) {
        poll();
      }
    }
    doc[add](pre + "DOMContentLoaded", init, false);
    doc[add](pre + "readystatechange", init, false);
    return win[add](pre + "load", init, false);
  }
};

// As a single function to be able to write tests.
Dropzone._autoDiscoverFunction = function () {
  if (Dropzone.autoDiscover) {
    return Dropzone.discover();
  }
};
contentLoaded(window, Dropzone._autoDiscoverFunction);

function __guard__(value, transform) {
  return typeof value !== 'undefined' && value !== null ? transform(value) : undefined;
}
function __guardMethod__(obj, methodName, transform) {
  if (typeof obj !== 'undefined' && obj !== null && typeof obj[methodName] === 'function') {
    return transform(obj, methodName);
  } else {
    return undefined;
  }
}

(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
  typeof define === 'function' && define.amd ? define(factory) :
  (global = global || self, global.EmojiButton = factory());
}(this, function () { 'use strict';

  function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError("Cannot call a class as a function");
    }
  }

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function ownKeys(object, enumerableOnly) {
    var keys = Object.keys(object);

    if (Object.getOwnPropertySymbols) {
      var symbols = Object.getOwnPropertySymbols(object);
      if (enumerableOnly) symbols = symbols.filter(function (sym) {
        return Object.getOwnPropertyDescriptor(object, sym).enumerable;
      });
      keys.push.apply(keys, symbols);
    }

    return keys;
  }

  function _objectSpread2(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i] != null ? arguments[i] : {};

      if (i % 2) {
        ownKeys(source, true).forEach(function (key) {
          _defineProperty(target, key, source[key]);
        });
      } else if (Object.getOwnPropertyDescriptors) {
        Object.defineProperties(target, Object.getOwnPropertyDescriptors(source));
      } else {
        ownKeys(source).forEach(function (key) {
          Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key));
        });
      }
    }

    return target;
  }

  function _toConsumableArray(arr) {
    return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread();
  }

  function _arrayWithoutHoles(arr) {
    if (Array.isArray(arr)) {
      for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) arr2[i] = arr[i];

      return arr2;
    }
  }

  function _iterableToArray(iter) {
    if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter);
  }

  function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance");
  }

  //function styleInject(css,ref){if(ref===void 0)ref={};var insertAt=ref.insertAt;if(!css||typeof document==='undefined'){return;}var head=document.head||document.getElementsByTagName('head')[0];var style=document.createElement('style');style.type='text/css';if(insertAt==='top'){if(head.firstChild){head.insertBefore(style,head.firstChild);}else{head.appendChild(style);}}else{head.appendChild(style);}if(style.styleSheet){style.styleSheet.cssText=css;}else{style.appendChild(document.createTextNode(css));}}

  //var css = ".emoji-picker {\n  border: 1px solid #CCCCCC;\n  border-radius: 5px;\n  background: #FFFFFF;\n  width: 23rem;\n  font-family: Arial, Helvetica, sans-serif;\n  opacity: 0;\n  transition: opacity 0.3s;\n  margin: 0 0.5em;\n  overflow: hidden;\n}\n\n.emoji-picker.visible {\n  opacity: 1;\n}\n\n.emoji-picker__content {\n  padding: 0.5em;\n  height: 20rem;\n  overflow: hidden;\n  position: relative;\n}\n\n.emoji-picker__preview {\n  height: 2em;\n  padding: 0.5em;\n  border-top: 1px solid #CCCCCC;\n  display: flex;\n  flex-direction: row;\n  align-items: center;\n}\n\n.emoji-picker__preview-emoji {\n  font-size: 2em;\n  margin-right: 0.25em;\n  font-family: \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Segoe UI\", \"Apple Color Emoji\", \"Twemoji Mozilla\", \"Noto Color Emoji\", \"EmojiOne Color\", \"Android Emoji\";\n}\n\n.emoji-picker__preview-name {\n  color: #666666;\n  font-size: 0.85em;\n  overflow-wrap: break-word;\n  word-break: break-all;\n}\n\n.emoji-picker__tabs {\n  margin: 0;\n  padding: 0;\n  display: flex;\n}\n\n.emoji-picker__tab {\n  font-size: 1.5rem;\n  list-style: none;\n  display: flex;\n  align-items: center;\n  justify-content: center;\n  cursor: pointer;\n  flex-grow: 1;\n  text-align: center;\n  color: #666666;\n  border-radius: 3px;\n  transition: background 0.25s;\n}\n\n.emoji-picker__tab:hover {\n  background: #E8F4F9;\n}\n\n.emoji-picker__tab svg {\n  padding: 0.5rem;\n}\n\n.emoji-picker__tab.active {\n  background: #4F81E5;\n  color: #FFFFFF;\n}\n\n.emoji-picker__tab-body {\n  margin-top: 0.5em;\n  transform: translateX(25rem);\n  transition: transform 0.25s;\n  position: absolute;\n}\n\n.emoji-picker__tab-body h2 {\n  font-size: 0.85rem;\n  color: #333333;\n  margin: 0;\n  text-align: left;\n}\n\n.emoji-picker__tab-body.active {\n  display: block;\n  transform: translateX(0);\n}\n\n.emoji-picker__emojis {\n  height: 16.5rem;\n  overflow-y: scroll;\n  display: flex;\n  flex-wrap: wrap;\n  align-content: flex-start;\n  width: calc((1.8rem * 1.5 * 8) + 1rem);\n  margin: auto;\n}\n\n.emoji-picker__emojis.search-results {\n  height: 21rem;\n}\n\n.emoji-picker__emoji {\n  background: transparent;\n  border: none;\n  border-radius: 5px;\n  cursor: pointer;\n  font-size: 1.8rem;\n  width: 1.5em;\n  height: 1.5em;\n  padding: 0;\n  margin: 0;\n  outline: none;\n  font-family: \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Segoe UI\", \"Apple Color Emoji\", \"Twemoji Mozilla\", \"Noto Color Emoji\", \"EmojiOne Color\", \"Android Emoji\";\n}\n\n.emoji-picker__emoji:focus, .emoji-picker__emoji:hover {\n  background: #E8F4F9;\n}\n\n.emoji-picker__search-container {\n  margin: 0.5em;\n  position: relative;\n  height: 2em;\n  display: flex;\n}\n\n.emoji-picker__search {\n  box-sizing: border-box;\n  width: 100%;\n  border-radius: 3px;\n  border: 1px solid #CCCCCC;\n  padding-right: 2em;\n  padding: 0.25em 2.25em 0.25em 0.25em;\n  font-size: 0.85rem;\n  outline: none;\n}\n\n.emoji-picker__search:focus {\n  border: 1px solid #4F81E5;\n}\n\n.emoji-picker__search-icon {\n  position: absolute;\n  color: #CCCCCC;\n  width: 1em;\n  height: 1em;\n  right: 0.75em;\n  top: calc(50% - 0.5em);\n}\n\n.emoji-picker__search-not-found {\n  color: #666666;\n  text-align: center;\n  margin-top: 2em;\n}\n\n.emoji-picker__search-not-found-icon {\n  font-size: 3em;\n}\n\n.emoji-picker__search-not-found h2 {\n  margin: 0.5em 0;\n  font-size: 1em;\n}\n\n.emoji-picker__variant-overlay {\n  background: rgba(0, 0, 0, 0.7);\n  position: absolute;\n  top: 0;\n  left: 0;\n  width: 23rem;\n  height: 27.5rem;\n  display: flex;\n  flex-direction: column;\n  justify-content: center;\n}\n\n.emoji-picker__variant-popup {\n  background: #FFFFFF;\n  margin: 0.5em;\n  padding: 0.5em;\n  text-align: center;\n}\n\n.emoji-picker__variant-popup-close-button {\n  cursor: pointer;\n  background: transparent;\n  border: none;\n  position: absolute;\n  right: 1em;\n  padding: 0;\n  top: calc(50% - 0.5em);\n  height: 1em;\n  width: 1em;\n}";
  //styleInject(css);

  function E(){// Keep this empty so it's easier to inherit from
  // (via https://github.com/lipsmack from https://github.com/scottcorgan/tiny-emitter/issues/3)
  }E.prototype={on:function(name,callback,ctx){var e=this.e||(this.e={});(e[name]||(e[name]=[])).push({fn:callback,ctx:ctx});return this;},once:function(name,callback,ctx){var self=this;function listener(){self.off(name,listener);callback.apply(ctx,arguments);}listener._=callback;return this.on(name,listener,ctx);},emit:function(name){var data=[].slice.call(arguments,1);var evtArr=((this.e||(this.e={}))[name]||[]).slice();var i=0;var len=evtArr.length;for(i;i<len;i++){evtArr[i].fn.apply(evtArr[i].ctx,data);}return this;},off:function(name,callback){var e=this.e||(this.e={});var evts=e[name];var liveEvents=[];if(evts&&callback){for(var i=0,len=evts.length;i<len;i++){if(evts[i].fn!==callback&&evts[i].fn._!==callback)liveEvents.push(evts[i]);}}// Remove event from queue to prevent memory leak
  // Suggested by https://github.com/lazd
  // Ref: https://github.com/scottcorgan/tiny-emitter/commit/c6ebfaa9bc973b33d110a84a307742b7cf94c953#commitcomment-5024910
  liveEvents.length?e[name]=liveEvents:delete e[name];return this;}};var tinyEmitter=E;var TinyEmitter=E;
  tinyEmitter.TinyEmitter = TinyEmitter;

  /**!
   * @fileOverview Kickass library to create and place poppers near their reference elements.
   * @version 1.15.0
   * @license
   * Copyright (c) 2016 Federico Zivolo and contributors
   *
   * Permission is hereby granted, free of charge, to any person obtaining a copy
   * of this software and associated documentation files (the "Software"), to deal
   * in the Software without restriction, including without limitation the rights
   * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
   * copies of the Software, and to permit persons to whom the Software is
   * furnished to do so, subject to the following conditions:
   *
   * The above copyright notice and this permission notice shall be included in all
   * copies or substantial portions of the Software.
   *
   * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
   * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
   * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
   * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
   * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
   * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
   * SOFTWARE.
   */var isBrowser=typeof window!=='undefined'&&typeof document!=='undefined';var longerTimeoutBrowsers=['Edge','Trident','Firefox'];var timeoutDuration=0;for(var i=0;i<longerTimeoutBrowsers.length;i+=1){if(isBrowser&&navigator.userAgent.indexOf(longerTimeoutBrowsers[i])>=0){timeoutDuration=1;break;}}function microtaskDebounce(fn){var called=false;return function(){if(called){return;}called=true;window.Promise.resolve().then(function(){called=false;fn();});};}function taskDebounce(fn){var scheduled=false;return function(){if(!scheduled){scheduled=true;setTimeout(function(){scheduled=false;fn();},timeoutDuration);}};}var supportsMicroTasks=isBrowser&&window.Promise;/**
  * Create a debounced version of a method, that's asynchronously deferred
  * but called in the minimum time possible.
  *
  * @method
  * @memberof Popper.Utils
  * @argument {Function} fn
  * @returns {Function}
  */var debounce=supportsMicroTasks?microtaskDebounce:taskDebounce;/**
   * Check if the given variable is a function
   * @method
   * @memberof Popper.Utils
   * @argument {Any} functionToCheck - variable to check
   * @returns {Boolean} answer to: is a function?
   */function isFunction(functionToCheck){var getType={};return functionToCheck&&getType.toString.call(functionToCheck)==='[object Function]';}/**
   * Get CSS computed property of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Eement} element
   * @argument {String} property
   */function getStyleComputedProperty(element,property){if(element.nodeType!==1){return [];}// NOTE: 1 DOM access here
  var window=element.ownerDocument.defaultView;var css=window.getComputedStyle(element,null);return property?css[property]:css;}/**
   * Returns the parentNode or the host of the element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} parent
   */function getParentNode(element){if(element.nodeName==='HTML'){return element;}return element.parentNode||element.host;}/**
   * Returns the scrolling parent of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} scroll parent
   */function getScrollParent(element){// Return body, `getScroll` will take care to get the correct `scrollTop` from it
  if(!element){return document.body;}switch(element.nodeName){case'HTML':case'BODY':return element.ownerDocument.body;case'#document':return element.body;}// Firefox want us to check `-x` and `-y` variations as well
  var _getStyleComputedProp=getStyleComputedProperty(element),overflow=_getStyleComputedProp.overflow,overflowX=_getStyleComputedProp.overflowX,overflowY=_getStyleComputedProp.overflowY;if(/(auto|scroll|overlay)/.test(overflow+overflowY+overflowX)){return element;}return getScrollParent(getParentNode(element));}var isIE11=isBrowser&&!!(window.MSInputMethodContext&&document.documentMode);var isIE10=isBrowser&&/MSIE 10/.test(navigator.userAgent);/**
   * Determines if the browser is Internet Explorer
   * @method
   * @memberof Popper.Utils
   * @param {Number} version to check
   * @returns {Boolean} isIE
   */function isIE(version){if(version===11){return isIE11;}if(version===10){return isIE10;}return isIE11||isIE10;}/**
   * Returns the offset parent of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} offset parent
   */function getOffsetParent(element){if(!element){return document.documentElement;}var noOffsetParent=isIE(10)?document.body:null;// NOTE: 1 DOM access here
  var offsetParent=element.offsetParent||null;// Skip hidden elements which don't have an offsetParent
  while(offsetParent===noOffsetParent&&element.nextElementSibling){offsetParent=(element=element.nextElementSibling).offsetParent;}var nodeName=offsetParent&&offsetParent.nodeName;if(!nodeName||nodeName==='BODY'||nodeName==='HTML'){return element?element.ownerDocument.documentElement:document.documentElement;}// .offsetParent will return the closest TH, TD or TABLE in case
  // no offsetParent is present, I hate this job...
  if(['TH','TD','TABLE'].indexOf(offsetParent.nodeName)!==-1&&getStyleComputedProperty(offsetParent,'position')==='static'){return getOffsetParent(offsetParent);}return offsetParent;}function isOffsetContainer(element){var nodeName=element.nodeName;if(nodeName==='BODY'){return false;}return nodeName==='HTML'||getOffsetParent(element.firstElementChild)===element;}/**
   * Finds the root node (document, shadowDOM root) of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} node
   * @returns {Element} root node
   */function getRoot(node){if(node.parentNode!==null){return getRoot(node.parentNode);}return node;}/**
   * Finds the offset parent common to the two provided nodes
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element1
   * @argument {Element} element2
   * @returns {Element} common offset parent
   */function findCommonOffsetParent(element1,element2){// This check is needed to avoid errors in case one of the elements isn't defined for any reason
  if(!element1||!element1.nodeType||!element2||!element2.nodeType){return document.documentElement;}// Here we make sure to give as "start" the element that comes first in the DOM
  var order=element1.compareDocumentPosition(element2)&Node.DOCUMENT_POSITION_FOLLOWING;var start=order?element1:element2;var end=order?element2:element1;// Get common ancestor container
  var range=document.createRange();range.setStart(start,0);range.setEnd(end,0);var commonAncestorContainer=range.commonAncestorContainer;// Both nodes are inside #document
  if(element1!==commonAncestorContainer&&element2!==commonAncestorContainer||start.contains(end)){if(isOffsetContainer(commonAncestorContainer)){return commonAncestorContainer;}return getOffsetParent(commonAncestorContainer);}// one of the nodes is inside shadowDOM, find which one
  var element1root=getRoot(element1);if(element1root.host){return findCommonOffsetParent(element1root.host,element2);}else{return findCommonOffsetParent(element1,getRoot(element2).host);}}/**
   * Gets the scroll value of the given element in the given side (top and left)
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @argument {String} side `top` or `left`
   * @returns {number} amount of scrolled pixels
   */function getScroll(element){var side=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'top';var upperSide=side==='top'?'scrollTop':'scrollLeft';var nodeName=element.nodeName;if(nodeName==='BODY'||nodeName==='HTML'){var html=element.ownerDocument.documentElement;var scrollingElement=element.ownerDocument.scrollingElement||html;return scrollingElement[upperSide];}return element[upperSide];}/*
   * Sum or subtract the element scroll values (left and top) from a given rect object
   * @method
   * @memberof Popper.Utils
   * @param {Object} rect - Rect object you want to change
   * @param {HTMLElement} element - The element from the function reads the scroll values
   * @param {Boolean} subtract - set to true if you want to subtract the scroll values
   * @return {Object} rect - The modifier rect object
   */function includeScroll(rect,element){var subtract=arguments.length>2&&arguments[2]!==undefined?arguments[2]:false;var scrollTop=getScroll(element,'top');var scrollLeft=getScroll(element,'left');var modifier=subtract?-1:1;rect.top+=scrollTop*modifier;rect.bottom+=scrollTop*modifier;rect.left+=scrollLeft*modifier;rect.right+=scrollLeft*modifier;return rect;}/*
   * Helper to detect borders of a given element
   * @method
   * @memberof Popper.Utils
   * @param {CSSStyleDeclaration} styles
   * Result of `getStyleComputedProperty` on the given element
   * @param {String} axis - `x` or `y`
   * @return {number} borders - The borders size of the given axis
   */function getBordersSize(styles,axis){var sideA=axis==='x'?'Left':'Top';var sideB=sideA==='Left'?'Right':'Bottom';return parseFloat(styles['border'+sideA+'Width'],10)+parseFloat(styles['border'+sideB+'Width'],10);}function getSize(axis,body,html,computedStyle){return Math.max(body['offset'+axis],body['scroll'+axis],html['client'+axis],html['offset'+axis],html['scroll'+axis],isIE(10)?parseInt(html['offset'+axis])+parseInt(computedStyle['margin'+(axis==='Height'?'Top':'Left')])+parseInt(computedStyle['margin'+(axis==='Height'?'Bottom':'Right')]):0);}function getWindowSizes(document){var body=document.body;var html=document.documentElement;var computedStyle=isIE(10)&&getComputedStyle(html);return {height:getSize('Height',body,html,computedStyle),width:getSize('Width',body,html,computedStyle)};}var classCallCheck=function(instance,Constructor){if(!(instance instanceof Constructor)){throw new TypeError("Cannot call a class as a function");}};var createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||false;descriptor.configurable=true;if("value"in descriptor)descriptor.writable=true;Object.defineProperty(target,descriptor.key,descriptor);}}return function(Constructor,protoProps,staticProps){if(protoProps)defineProperties(Constructor.prototype,protoProps);if(staticProps)defineProperties(Constructor,staticProps);return Constructor;};}();var defineProperty=function(obj,key,value){if(key in obj){Object.defineProperty(obj,key,{value:value,enumerable:true,configurable:true,writable:true});}else{obj[key]=value;}return obj;};var _extends=Object.assign||function(target){for(var i=1;i<arguments.length;i++){var source=arguments[i];for(var key in source){if(Object.prototype.hasOwnProperty.call(source,key)){target[key]=source[key];}}}return target;};/**
   * Given element offsets, generate an output similar to getBoundingClientRect
   * @method
   * @memberof Popper.Utils
   * @argument {Object} offsets
   * @returns {Object} ClientRect like output
   */function getClientRect(offsets){return _extends({},offsets,{right:offsets.left+offsets.width,bottom:offsets.top+offsets.height});}/**
   * Get bounding client rect of given element
   * @method
   * @memberof Popper.Utils
   * @param {HTMLElement} element
   * @return {Object} client rect
   */function getBoundingClientRect(element){var rect={};// IE10 10 FIX: Please, don't ask, the element isn't
  // considered in DOM in some circumstances...
  // This isn't reproducible in IE10 compatibility mode of IE11
  try{if(isIE(10)){rect=element.getBoundingClientRect();var scrollTop=getScroll(element,'top');var scrollLeft=getScroll(element,'left');rect.top+=scrollTop;rect.left+=scrollLeft;rect.bottom+=scrollTop;rect.right+=scrollLeft;}else{rect=element.getBoundingClientRect();}}catch(e){}var result={left:rect.left,top:rect.top,width:rect.right-rect.left,height:rect.bottom-rect.top};// subtract scrollbar size from sizes
  var sizes=element.nodeName==='HTML'?getWindowSizes(element.ownerDocument):{};var width=sizes.width||element.clientWidth||result.right-result.left;var height=sizes.height||element.clientHeight||result.bottom-result.top;var horizScrollbar=element.offsetWidth-width;var vertScrollbar=element.offsetHeight-height;// if an hypothetical scrollbar is detected, we must be sure it's not a `border`
  // we make this check conditional for performance reasons
  if(horizScrollbar||vertScrollbar){var styles=getStyleComputedProperty(element);horizScrollbar-=getBordersSize(styles,'x');vertScrollbar-=getBordersSize(styles,'y');result.width-=horizScrollbar;result.height-=vertScrollbar;}return getClientRect(result);}function getOffsetRectRelativeToArbitraryNode(children,parent){var fixedPosition=arguments.length>2&&arguments[2]!==undefined?arguments[2]:false;var isIE10=isIE(10);var isHTML=parent.nodeName==='HTML';var childrenRect=getBoundingClientRect(children);var parentRect=getBoundingClientRect(parent);var scrollParent=getScrollParent(children);var styles=getStyleComputedProperty(parent);var borderTopWidth=parseFloat(styles.borderTopWidth,10);var borderLeftWidth=parseFloat(styles.borderLeftWidth,10);// In cases where the parent is fixed, we must ignore negative scroll in offset calc
  if(fixedPosition&&isHTML){parentRect.top=Math.max(parentRect.top,0);parentRect.left=Math.max(parentRect.left,0);}var offsets=getClientRect({top:childrenRect.top-parentRect.top-borderTopWidth,left:childrenRect.left-parentRect.left-borderLeftWidth,width:childrenRect.width,height:childrenRect.height});offsets.marginTop=0;offsets.marginLeft=0;// Subtract margins of documentElement in case it's being used as parent
  // we do this only on HTML because it's the only element that behaves
  // differently when margins are applied to it. The margins are included in
  // the box of the documentElement, in the other cases not.
  if(!isIE10&&isHTML){var marginTop=parseFloat(styles.marginTop,10);var marginLeft=parseFloat(styles.marginLeft,10);offsets.top-=borderTopWidth-marginTop;offsets.bottom-=borderTopWidth-marginTop;offsets.left-=borderLeftWidth-marginLeft;offsets.right-=borderLeftWidth-marginLeft;// Attach marginTop and marginLeft because in some circumstances we may need them
  offsets.marginTop=marginTop;offsets.marginLeft=marginLeft;}if(isIE10&&!fixedPosition?parent.contains(scrollParent):parent===scrollParent&&scrollParent.nodeName!=='BODY'){offsets=includeScroll(offsets,parent);}return offsets;}function getViewportOffsetRectRelativeToArtbitraryNode(element){var excludeScroll=arguments.length>1&&arguments[1]!==undefined?arguments[1]:false;var html=element.ownerDocument.documentElement;var relativeOffset=getOffsetRectRelativeToArbitraryNode(element,html);var width=Math.max(html.clientWidth,window.innerWidth||0);var height=Math.max(html.clientHeight,window.innerHeight||0);var scrollTop=!excludeScroll?getScroll(html):0;var scrollLeft=!excludeScroll?getScroll(html,'left'):0;var offset={top:scrollTop-relativeOffset.top+relativeOffset.marginTop,left:scrollLeft-relativeOffset.left+relativeOffset.marginLeft,width:width,height:height};return getClientRect(offset);}/**
   * Check if the given element is fixed or is inside a fixed parent
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @argument {Element} customContainer
   * @returns {Boolean} answer to "isFixed?"
   */function isFixed(element){var nodeName=element.nodeName;if(nodeName==='BODY'||nodeName==='HTML'){return false;}if(getStyleComputedProperty(element,'position')==='fixed'){return true;}var parentNode=getParentNode(element);if(!parentNode){return false;}return isFixed(parentNode);}/**
   * Finds the first parent of an element that has a transformed property defined
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} first transformed parent or documentElement
   */function getFixedPositionOffsetParent(element){// This check is needed to avoid errors in case one of the elements isn't defined for any reason
  if(!element||!element.parentElement||isIE()){return document.documentElement;}var el=element.parentElement;while(el&&getStyleComputedProperty(el,'transform')==='none'){el=el.parentElement;}return el||document.documentElement;}/**
   * Computed the boundaries limits and return them
   * @method
   * @memberof Popper.Utils
   * @param {HTMLElement} popper
   * @param {HTMLElement} reference
   * @param {number} padding
   * @param {HTMLElement} boundariesElement - Element used to define the boundaries
   * @param {Boolean} fixedPosition - Is in fixed position mode
   * @returns {Object} Coordinates of the boundaries
   */function getBoundaries(popper,reference,padding,boundariesElement){var fixedPosition=arguments.length>4&&arguments[4]!==undefined?arguments[4]:false;// NOTE: 1 DOM access here
  var boundaries={top:0,left:0};var offsetParent=fixedPosition?getFixedPositionOffsetParent(popper):findCommonOffsetParent(popper,reference);// Handle viewport case
  if(boundariesElement==='viewport'){boundaries=getViewportOffsetRectRelativeToArtbitraryNode(offsetParent,fixedPosition);}else{// Handle other cases based on DOM element used as boundaries
  var boundariesNode=void 0;if(boundariesElement==='scrollParent'){boundariesNode=getScrollParent(getParentNode(reference));if(boundariesNode.nodeName==='BODY'){boundariesNode=popper.ownerDocument.documentElement;}}else if(boundariesElement==='window'){boundariesNode=popper.ownerDocument.documentElement;}else{boundariesNode=boundariesElement;}var offsets=getOffsetRectRelativeToArbitraryNode(boundariesNode,offsetParent,fixedPosition);// In case of HTML, we need a different computation
  if(boundariesNode.nodeName==='HTML'&&!isFixed(offsetParent)){var _getWindowSizes=getWindowSizes(popper.ownerDocument),height=_getWindowSizes.height,width=_getWindowSizes.width;boundaries.top+=offsets.top-offsets.marginTop;boundaries.bottom=height+offsets.top;boundaries.left+=offsets.left-offsets.marginLeft;boundaries.right=width+offsets.left;}else{// for all the other DOM elements, this one is good
  boundaries=offsets;}}// Add paddings
  padding=padding||0;var isPaddingNumber=typeof padding==='number';boundaries.left+=isPaddingNumber?padding:padding.left||0;boundaries.top+=isPaddingNumber?padding:padding.top||0;boundaries.right-=isPaddingNumber?padding:padding.right||0;boundaries.bottom-=isPaddingNumber?padding:padding.bottom||0;return boundaries;}function getArea(_ref){var width=_ref.width,height=_ref.height;return width*height;}/**
   * Utility used to transform the `auto` placement to the placement with more
   * available space.
   * @method
   * @memberof Popper.Utils
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function computeAutoPlacement(placement,refRect,popper,reference,boundariesElement){var padding=arguments.length>5&&arguments[5]!==undefined?arguments[5]:0;if(placement.indexOf('auto')===-1){return placement;}var boundaries=getBoundaries(popper,reference,padding,boundariesElement);var rects={top:{width:boundaries.width,height:refRect.top-boundaries.top},right:{width:boundaries.right-refRect.right,height:boundaries.height},bottom:{width:boundaries.width,height:boundaries.bottom-refRect.bottom},left:{width:refRect.left-boundaries.left,height:boundaries.height}};var sortedAreas=Object.keys(rects).map(function(key){return _extends({key:key},rects[key],{area:getArea(rects[key])});}).sort(function(a,b){return b.area-a.area;});var filteredAreas=sortedAreas.filter(function(_ref2){var width=_ref2.width,height=_ref2.height;return width>=popper.clientWidth&&height>=popper.clientHeight;});var computedPlacement=filteredAreas.length>0?filteredAreas[0].key:sortedAreas[0].key;var variation=placement.split('-')[1];return computedPlacement+(variation?'-'+variation:'');}/**
   * Get offsets to the reference element
   * @method
   * @memberof Popper.Utils
   * @param {Object} state
   * @param {Element} popper - the popper element
   * @param {Element} reference - the reference element (the popper will be relative to this)
   * @param {Element} fixedPosition - is in fixed position mode
   * @returns {Object} An object containing the offsets which will be applied to the popper
   */function getReferenceOffsets(state,popper,reference){var fixedPosition=arguments.length>3&&arguments[3]!==undefined?arguments[3]:null;var commonOffsetParent=fixedPosition?getFixedPositionOffsetParent(popper):findCommonOffsetParent(popper,reference);return getOffsetRectRelativeToArbitraryNode(reference,commonOffsetParent,fixedPosition);}/**
   * Get the outer sizes of the given element (offset size + margins)
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Object} object containing width and height properties
   */function getOuterSizes(element){var window=element.ownerDocument.defaultView;var styles=window.getComputedStyle(element);var x=parseFloat(styles.marginTop||0)+parseFloat(styles.marginBottom||0);var y=parseFloat(styles.marginLeft||0)+parseFloat(styles.marginRight||0);var result={width:element.offsetWidth+y,height:element.offsetHeight+x};return result;}/**
   * Get the opposite placement of the given one
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement
   * @returns {String} flipped placement
   */function getOppositePlacement(placement){var hash={left:'right',right:'left',bottom:'top',top:'bottom'};return placement.replace(/left|right|bottom|top/g,function(matched){return hash[matched];});}/**
   * Get offsets to the popper
   * @method
   * @memberof Popper.Utils
   * @param {Object} position - CSS position the Popper will get applied
   * @param {HTMLElement} popper - the popper element
   * @param {Object} referenceOffsets - the reference offsets (the popper will be relative to this)
   * @param {String} placement - one of the valid placement options
   * @returns {Object} popperOffsets - An object containing the offsets which will be applied to the popper
   */function getPopperOffsets(popper,referenceOffsets,placement){placement=placement.split('-')[0];// Get popper node sizes
  var popperRect=getOuterSizes(popper);// Add position, width and height to our offsets object
  var popperOffsets={width:popperRect.width,height:popperRect.height};// depending by the popper placement we have to compute its offsets slightly differently
  var isHoriz=['right','left'].indexOf(placement)!==-1;var mainSide=isHoriz?'top':'left';var secondarySide=isHoriz?'left':'top';var measurement=isHoriz?'height':'width';var secondaryMeasurement=!isHoriz?'height':'width';popperOffsets[mainSide]=referenceOffsets[mainSide]+referenceOffsets[measurement]/2-popperRect[measurement]/2;if(placement===secondarySide){popperOffsets[secondarySide]=referenceOffsets[secondarySide]-popperRect[secondaryMeasurement];}else{popperOffsets[secondarySide]=referenceOffsets[getOppositePlacement(secondarySide)];}return popperOffsets;}/**
   * Mimics the `find` method of Array
   * @method
   * @memberof Popper.Utils
   * @argument {Array} arr
   * @argument prop
   * @argument value
   * @returns index or -1
   */function find(arr,check){// use native find if supported
  if(Array.prototype.find){return arr.find(check);}// use `filter` to obtain the same behavior of `find`
  return arr.filter(check)[0];}/**
   * Return the index of the matching object
   * @method
   * @memberof Popper.Utils
   * @argument {Array} arr
   * @argument prop
   * @argument value
   * @returns index or -1
   */function findIndex(arr,prop,value){// use native findIndex if supported
  if(Array.prototype.findIndex){return arr.findIndex(function(cur){return cur[prop]===value;});}// use `find` + `indexOf` if `findIndex` isn't supported
  var match=find(arr,function(obj){return obj[prop]===value;});return arr.indexOf(match);}/**
   * Loop trough the list of modifiers and run them in order,
   * each of them will then edit the data object.
   * @method
   * @memberof Popper.Utils
   * @param {dataObject} data
   * @param {Array} modifiers
   * @param {String} ends - Optional modifier name used as stopper
   * @returns {dataObject}
   */function runModifiers(modifiers,data,ends){var modifiersToRun=ends===undefined?modifiers:modifiers.slice(0,findIndex(modifiers,'name',ends));modifiersToRun.forEach(function(modifier){if(modifier['function']){// eslint-disable-line dot-notation
  console.warn('`modifier.function` is deprecated, use `modifier.fn`!');}var fn=modifier['function']||modifier.fn;// eslint-disable-line dot-notation
  if(modifier.enabled&&isFunction(fn)){// Add properties to offsets to make them a complete clientRect object
  // we do this before each modifier to make sure the previous one doesn't
  // mess with these values
  data.offsets.popper=getClientRect(data.offsets.popper);data.offsets.reference=getClientRect(data.offsets.reference);data=fn(data,modifier);}});return data;}/**
   * Updates the position of the popper, computing the new offsets and applying
   * the new style.<br />
   * Prefer `scheduleUpdate` over `update` because of performance reasons.
   * @method
   * @memberof Popper
   */function update(){// if popper is destroyed, don't perform any further update
  if(this.state.isDestroyed){return;}var data={instance:this,styles:{},arrowStyles:{},attributes:{},flipped:false,offsets:{}};// compute reference element offsets
  data.offsets.reference=getReferenceOffsets(this.state,this.popper,this.reference,this.options.positionFixed);// compute auto placement, store placement inside the data object,
  // modifiers will be able to edit `placement` if needed
  // and refer to originalPlacement to know the original value
  data.placement=computeAutoPlacement(this.options.placement,data.offsets.reference,this.popper,this.reference,this.options.modifiers.flip.boundariesElement,this.options.modifiers.flip.padding);// store the computed placement inside `originalPlacement`
  data.originalPlacement=data.placement;data.positionFixed=this.options.positionFixed;// compute the popper offsets
  data.offsets.popper=getPopperOffsets(this.popper,data.offsets.reference,data.placement);data.offsets.popper.position=this.options.positionFixed?'fixed':'absolute';// run the modifiers
  data=runModifiers(this.modifiers,data);// the first `update` will call `onCreate` callback
  // the other ones will call `onUpdate` callback
  if(!this.state.isCreated){this.state.isCreated=true;this.options.onCreate(data);}else{this.options.onUpdate(data);}}/**
   * Helper used to know if the given modifier is enabled.
   * @method
   * @memberof Popper.Utils
   * @returns {Boolean}
   */function isModifierEnabled(modifiers,modifierName){return modifiers.some(function(_ref){var name=_ref.name,enabled=_ref.enabled;return enabled&&name===modifierName;});}/**
   * Get the prefixed supported property name
   * @method
   * @memberof Popper.Utils
   * @argument {String} property (camelCase)
   * @returns {String} prefixed property (camelCase or PascalCase, depending on the vendor prefix)
   */function getSupportedPropertyName(property){var prefixes=[false,'ms','Webkit','Moz','O'];var upperProp=property.charAt(0).toUpperCase()+property.slice(1);for(var i=0;i<prefixes.length;i++){var prefix=prefixes[i];var toCheck=prefix?''+prefix+upperProp:property;if(typeof document.body.style[toCheck]!=='undefined'){return toCheck;}}return null;}/**
   * Destroys the popper.
   * @method
   * @memberof Popper
   */function destroy(){this.state.isDestroyed=true;// touch DOM only if `applyStyle` modifier is enabled
  if(isModifierEnabled(this.modifiers,'applyStyle')){this.popper.removeAttribute('x-placement');this.popper.style.position='';this.popper.style.top='';this.popper.style.left='';this.popper.style.right='';this.popper.style.bottom='';this.popper.style.willChange='';this.popper.style[getSupportedPropertyName('transform')]='';}this.disableEventListeners();// remove the popper if user explicity asked for the deletion on destroy
  // do not use `remove` because IE11 doesn't support it
  if(this.options.removeOnDestroy){this.popper.parentNode.removeChild(this.popper);}return this;}/**
   * Get the window associated with the element
   * @argument {Element} element
   * @returns {Window}
   */function getWindow(element){var ownerDocument=element.ownerDocument;return ownerDocument?ownerDocument.defaultView:window;}function attachToScrollParents(scrollParent,event,callback,scrollParents){var isBody=scrollParent.nodeName==='BODY';var target=isBody?scrollParent.ownerDocument.defaultView:scrollParent;target.addEventListener(event,callback,{passive:true});if(!isBody){attachToScrollParents(getScrollParent(target.parentNode),event,callback,scrollParents);}scrollParents.push(target);}/**
   * Setup needed event listeners used to update the popper position
   * @method
   * @memberof Popper.Utils
   * @private
   */function setupEventListeners(reference,options,state,updateBound){// Resize event listener on window
  state.updateBound=updateBound;getWindow(reference).addEventListener('resize',state.updateBound,{passive:true});// Scroll event listener on scroll parents
  var scrollElement=getScrollParent(reference);attachToScrollParents(scrollElement,'scroll',state.updateBound,state.scrollParents);state.scrollElement=scrollElement;state.eventsEnabled=true;return state;}/**
   * It will add resize/scroll events and start recalculating
   * position of the popper element when they are triggered.
   * @method
   * @memberof Popper
   */function enableEventListeners(){if(!this.state.eventsEnabled){this.state=setupEventListeners(this.reference,this.options,this.state,this.scheduleUpdate);}}/**
   * Remove event listeners used to update the popper position
   * @method
   * @memberof Popper.Utils
   * @private
   */function removeEventListeners(reference,state){// Remove resize event listener on window
  getWindow(reference).removeEventListener('resize',state.updateBound);// Remove scroll event listener on scroll parents
  state.scrollParents.forEach(function(target){target.removeEventListener('scroll',state.updateBound);});// Reset state
  state.updateBound=null;state.scrollParents=[];state.scrollElement=null;state.eventsEnabled=false;return state;}/**
   * It will remove resize/scroll events and won't recalculate popper position
   * when they are triggered. It also won't trigger `onUpdate` callback anymore,
   * unless you call `update` method manually.
   * @method
   * @memberof Popper
   */function disableEventListeners(){if(this.state.eventsEnabled){cancelAnimationFrame(this.scheduleUpdate);this.state=removeEventListeners(this.reference,this.state);}}/**
   * Tells if a given input is a number
   * @method
   * @memberof Popper.Utils
   * @param {*} input to check
   * @return {Boolean}
   */function isNumeric(n){return n!==''&&!isNaN(parseFloat(n))&&isFinite(n);}/**
   * Set the style to the given popper
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element - Element to apply the style to
   * @argument {Object} styles
   * Object with a list of properties and values which will be applied to the element
   */function setStyles(element,styles){Object.keys(styles).forEach(function(prop){var unit='';// add unit if the value is numeric and is one of the following
  if(['width','height','top','right','bottom','left'].indexOf(prop)!==-1&&isNumeric(styles[prop])){unit='px';}element.style[prop]=styles[prop]+unit;});}/**
   * Set the attributes to the given popper
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element - Element to apply the attributes to
   * @argument {Object} styles
   * Object with a list of properties and values which will be applied to the element
   */function setAttributes(element,attributes){Object.keys(attributes).forEach(function(prop){var value=attributes[prop];if(value!==false){element.setAttribute(prop,attributes[prop]);}else{element.removeAttribute(prop);}});}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} data.styles - List of style properties - values to apply to popper element
   * @argument {Object} data.attributes - List of attribute properties - values to apply to popper element
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The same data object
   */function applyStyle(data){// any property present in `data.styles` will be applied to the popper,
  // in this way we can make the 3rd party modifiers add custom styles to it
  // Be aware, modifiers could override the properties defined in the previous
  // lines of this modifier!
  setStyles(data.instance.popper,data.styles);// any property present in `data.attributes` will be applied to the popper,
  // they will be set as HTML attributes of the element
  setAttributes(data.instance.popper,data.attributes);// if arrowElement is defined and arrowStyles has some properties
  if(data.arrowElement&&Object.keys(data.arrowStyles).length){setStyles(data.arrowElement,data.arrowStyles);}return data;}/**
   * Set the x-placement attribute before everything else because it could be used
   * to add margins to the popper margins needs to be calculated to get the
   * correct popper offsets.
   * @method
   * @memberof Popper.modifiers
   * @param {HTMLElement} reference - The reference element used to position the popper
   * @param {HTMLElement} popper - The HTML element used as popper
   * @param {Object} options - Popper.js options
   */function applyStyleOnLoad(reference,popper,options,modifierOptions,state){// compute reference element offsets
  var referenceOffsets=getReferenceOffsets(state,popper,reference,options.positionFixed);// compute auto placement, store placement inside the data object,
  // modifiers will be able to edit `placement` if needed
  // and refer to originalPlacement to know the original value
  var placement=computeAutoPlacement(options.placement,referenceOffsets,popper,reference,options.modifiers.flip.boundariesElement,options.modifiers.flip.padding);popper.setAttribute('x-placement',placement);// Apply `position` to popper before anything else because
  // without the position applied we can't guarantee correct computations
  setStyles(popper,{position:options.positionFixed?'fixed':'absolute'});return options;}/**
   * @function
   * @memberof Popper.Utils
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Boolean} shouldRound - If the offsets should be rounded at all
   * @returns {Object} The popper's position offsets rounded
   *
   * The tale of pixel-perfect positioning. It's still not 100% perfect, but as
   * good as it can be within reason.
   * Discussion here: https://github.com/FezVrasta/popper.js/pull/715
   *
   * Low DPI screens cause a popper to be blurry if not using full pixels (Safari
   * as well on High DPI screens).
   *
   * Firefox prefers no rounding for positioning and does not have blurriness on
   * high DPI screens.
   *
   * Only horizontal placement and left/right values need to be considered.
   */function getRoundedOffsets(data,shouldRound){var _data$offsets=data.offsets,popper=_data$offsets.popper,reference=_data$offsets.reference;var round=Math.round,floor=Math.floor;var noRound=function noRound(v){return v;};var referenceWidth=round(reference.width);var popperWidth=round(popper.width);var isVertical=['left','right'].indexOf(data.placement)!==-1;var isVariation=data.placement.indexOf('-')!==-1;var sameWidthParity=referenceWidth%2===popperWidth%2;var bothOddWidth=referenceWidth%2===1&&popperWidth%2===1;var horizontalToInteger=!shouldRound?noRound:isVertical||isVariation||sameWidthParity?round:floor;var verticalToInteger=!shouldRound?noRound:round;return {left:horizontalToInteger(bothOddWidth&&!isVariation&&shouldRound?popper.left-1:popper.left),top:verticalToInteger(popper.top),bottom:verticalToInteger(popper.bottom),right:horizontalToInteger(popper.right)};}var isFirefox=isBrowser&&/Firefox/i.test(navigator.userAgent);/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function computeStyle(data,options){var x=options.x,y=options.y;var popper=data.offsets.popper;// Remove this legacy support in Popper.js v2
  var legacyGpuAccelerationOption=find(data.instance.modifiers,function(modifier){return modifier.name==='applyStyle';}).gpuAcceleration;if(legacyGpuAccelerationOption!==undefined){console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');}var gpuAcceleration=legacyGpuAccelerationOption!==undefined?legacyGpuAccelerationOption:options.gpuAcceleration;var offsetParent=getOffsetParent(data.instance.popper);var offsetParentRect=getBoundingClientRect(offsetParent);// Styles
  var styles={position:popper.position};var offsets=getRoundedOffsets(data,window.devicePixelRatio<2||!isFirefox);var sideA=x==='bottom'?'top':'bottom';var sideB=y==='right'?'left':'right';// if gpuAcceleration is set to `true` and transform is supported,
  //  we use `translate3d` to apply the position to the popper we
  // automatically use the supported prefixed version if needed
  var prefixedProperty=getSupportedPropertyName('transform');// now, let's make a step back and look at this code closely (wtf?)
  // If the content of the popper grows once it's been positioned, it
  // may happen that the popper gets misplaced because of the new content
  // overflowing its reference element
  // To avoid this problem, we provide two options (x and y), which allow
  // the consumer to define the offset origin.
  // If we position a popper on top of a reference element, we can set
  // `x` to `top` to make the popper grow towards its top instead of
  // its bottom.
  var left=void 0,top=void 0;if(sideA==='bottom'){// when offsetParent is <html> the positioning is relative to the bottom of the screen (excluding the scrollbar)
  // and not the bottom of the html element
  if(offsetParent.nodeName==='HTML'){top=-offsetParent.clientHeight+offsets.bottom;}else{top=-offsetParentRect.height+offsets.bottom;}}else{top=offsets.top;}if(sideB==='right'){if(offsetParent.nodeName==='HTML'){left=-offsetParent.clientWidth+offsets.right;}else{left=-offsetParentRect.width+offsets.right;}}else{left=offsets.left;}if(gpuAcceleration&&prefixedProperty){styles[prefixedProperty]='translate3d('+left+'px, '+top+'px, 0)';styles[sideA]=0;styles[sideB]=0;styles.willChange='transform';}else{// othwerise, we use the standard `top`, `left`, `bottom` and `right` properties
  var invertTop=sideA==='bottom'?-1:1;var invertLeft=sideB==='right'?-1:1;styles[sideA]=top*invertTop;styles[sideB]=left*invertLeft;styles.willChange=sideA+', '+sideB;}// Attributes
  var attributes={'x-placement':data.placement};// Update `data` attributes, styles and arrowStyles
  data.attributes=_extends({},attributes,data.attributes);data.styles=_extends({},styles,data.styles);data.arrowStyles=_extends({},data.offsets.arrow,data.arrowStyles);return data;}/**
   * Helper used to know if the given modifier depends from another one.<br />
   * It checks if the needed modifier is listed and enabled.
   * @method
   * @memberof Popper.Utils
   * @param {Array} modifiers - list of modifiers
   * @param {String} requestingName - name of requesting modifier
   * @param {String} requestedName - name of requested modifier
   * @returns {Boolean}
   */function isModifierRequired(modifiers,requestingName,requestedName){var requesting=find(modifiers,function(_ref){var name=_ref.name;return name===requestingName;});var isRequired=!!requesting&&modifiers.some(function(modifier){return modifier.name===requestedName&&modifier.enabled&&modifier.order<requesting.order;});if(!isRequired){var _requesting='`'+requestingName+'`';var requested='`'+requestedName+'`';console.warn(requested+' modifier is required by '+_requesting+' modifier in order to work, be sure to include it before '+_requesting+'!');}return isRequired;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function arrow(data,options){var _data$offsets$arrow;// arrow depends on keepTogether in order to work
  if(!isModifierRequired(data.instance.modifiers,'arrow','keepTogether')){return data;}var arrowElement=options.element;// if arrowElement is a string, suppose it's a CSS selector
  if(typeof arrowElement==='string'){arrowElement=data.instance.popper.querySelector(arrowElement);// if arrowElement is not found, don't run the modifier
  if(!arrowElement){return data;}}else{// if the arrowElement isn't a query selector we must check that the
  // provided DOM node is child of its popper node
  if(!data.instance.popper.contains(arrowElement)){console.warn('WARNING: `arrow.element` must be child of its popper element!');return data;}}var placement=data.placement.split('-')[0];var _data$offsets=data.offsets,popper=_data$offsets.popper,reference=_data$offsets.reference;var isVertical=['left','right'].indexOf(placement)!==-1;var len=isVertical?'height':'width';var sideCapitalized=isVertical?'Top':'Left';var side=sideCapitalized.toLowerCase();var altSide=isVertical?'left':'top';var opSide=isVertical?'bottom':'right';var arrowElementSize=getOuterSizes(arrowElement)[len];//
  // extends keepTogether behavior making sure the popper and its
  // reference have enough pixels in conjunction
  //
  // top/left side
  if(reference[opSide]-arrowElementSize<popper[side]){data.offsets.popper[side]-=popper[side]-(reference[opSide]-arrowElementSize);}// bottom/right side
  if(reference[side]+arrowElementSize>popper[opSide]){data.offsets.popper[side]+=reference[side]+arrowElementSize-popper[opSide];}data.offsets.popper=getClientRect(data.offsets.popper);// compute center of the popper
  var center=reference[side]+reference[len]/2-arrowElementSize/2;// Compute the sideValue using the updated popper offsets
  // take popper margin in account because we don't have this info available
  var css=getStyleComputedProperty(data.instance.popper);var popperMarginSide=parseFloat(css['margin'+sideCapitalized],10);var popperBorderSide=parseFloat(css['border'+sideCapitalized+'Width'],10);var sideValue=center-data.offsets.popper[side]-popperMarginSide-popperBorderSide;// prevent arrowElement from being placed not contiguously to its popper
  sideValue=Math.max(Math.min(popper[len]-arrowElementSize,sideValue),0);data.arrowElement=arrowElement;data.offsets.arrow=(_data$offsets$arrow={},defineProperty(_data$offsets$arrow,side,Math.round(sideValue)),defineProperty(_data$offsets$arrow,altSide,''),_data$offsets$arrow);return data;}/**
   * Get the opposite placement variation of the given one
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement variation
   * @returns {String} flipped placement variation
   */function getOppositeVariation(variation){if(variation==='end'){return 'start';}else if(variation==='start'){return 'end';}return variation;}/**
   * List of accepted placements to use as values of the `placement` option.<br />
   * Valid placements are:
   * - `auto`
   * - `top`
   * - `right`
   * - `bottom`
   * - `left`
   *
   * Each placement can have a variation from this list:
   * - `-start`
   * - `-end`
   *
   * Variations are interpreted easily if you think of them as the left to right
   * written languages. Horizontally (`top` and `bottom`), `start` is left and `end`
   * is right.<br />
   * Vertically (`left` and `right`), `start` is top and `end` is bottom.
   *
   * Some valid examples are:
   * - `top-end` (on top of reference, right aligned)
   * - `right-start` (on right of reference, top aligned)
   * - `bottom` (on bottom, centered)
   * - `auto-end` (on the side with more space available, alignment depends by placement)
   *
   * @static
   * @type {Array}
   * @enum {String}
   * @readonly
   * @method placements
   * @memberof Popper
   */var placements=['auto-start','auto','auto-end','top-start','top','top-end','right-start','right','right-end','bottom-end','bottom','bottom-start','left-end','left','left-start'];// Get rid of `auto` `auto-start` and `auto-end`
  var validPlacements=placements.slice(3);/**
   * Given an initial placement, returns all the subsequent placements
   * clockwise (or counter-clockwise).
   *
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement - A valid placement (it accepts variations)
   * @argument {Boolean} counter - Set to true to walk the placements counterclockwise
   * @returns {Array} placements including their variations
   */function clockwise(placement){var counter=arguments.length>1&&arguments[1]!==undefined?arguments[1]:false;var index=validPlacements.indexOf(placement);var arr=validPlacements.slice(index+1).concat(validPlacements.slice(0,index));return counter?arr.reverse():arr;}var BEHAVIORS={FLIP:'flip',CLOCKWISE:'clockwise',COUNTERCLOCKWISE:'counterclockwise'};/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function flip(data,options){// if `inner` modifier is enabled, we can't use the `flip` modifier
  if(isModifierEnabled(data.instance.modifiers,'inner')){return data;}if(data.flipped&&data.placement===data.originalPlacement){// seems like flip is trying to loop, probably there's not enough space on any of the flippable sides
  return data;}var boundaries=getBoundaries(data.instance.popper,data.instance.reference,options.padding,options.boundariesElement,data.positionFixed);var placement=data.placement.split('-')[0];var placementOpposite=getOppositePlacement(placement);var variation=data.placement.split('-')[1]||'';var flipOrder=[];switch(options.behavior){case BEHAVIORS.FLIP:flipOrder=[placement,placementOpposite];break;case BEHAVIORS.CLOCKWISE:flipOrder=clockwise(placement);break;case BEHAVIORS.COUNTERCLOCKWISE:flipOrder=clockwise(placement,true);break;default:flipOrder=options.behavior;}flipOrder.forEach(function(step,index){if(placement!==step||flipOrder.length===index+1){return data;}placement=data.placement.split('-')[0];placementOpposite=getOppositePlacement(placement);var popperOffsets=data.offsets.popper;var refOffsets=data.offsets.reference;// using floor because the reference offsets may contain decimals we are not going to consider here
  var floor=Math.floor;var overlapsRef=placement==='left'&&floor(popperOffsets.right)>floor(refOffsets.left)||placement==='right'&&floor(popperOffsets.left)<floor(refOffsets.right)||placement==='top'&&floor(popperOffsets.bottom)>floor(refOffsets.top)||placement==='bottom'&&floor(popperOffsets.top)<floor(refOffsets.bottom);var overflowsLeft=floor(popperOffsets.left)<floor(boundaries.left);var overflowsRight=floor(popperOffsets.right)>floor(boundaries.right);var overflowsTop=floor(popperOffsets.top)<floor(boundaries.top);var overflowsBottom=floor(popperOffsets.bottom)>floor(boundaries.bottom);var overflowsBoundaries=placement==='left'&&overflowsLeft||placement==='right'&&overflowsRight||placement==='top'&&overflowsTop||placement==='bottom'&&overflowsBottom;// flip the variation if required
  var isVertical=['top','bottom'].indexOf(placement)!==-1;// flips variation if reference element overflows boundaries
  var flippedVariationByRef=!!options.flipVariations&&(isVertical&&variation==='start'&&overflowsLeft||isVertical&&variation==='end'&&overflowsRight||!isVertical&&variation==='start'&&overflowsTop||!isVertical&&variation==='end'&&overflowsBottom);// flips variation if popper content overflows boundaries
  var flippedVariationByContent=!!options.flipVariationsByContent&&(isVertical&&variation==='start'&&overflowsRight||isVertical&&variation==='end'&&overflowsLeft||!isVertical&&variation==='start'&&overflowsBottom||!isVertical&&variation==='end'&&overflowsTop);var flippedVariation=flippedVariationByRef||flippedVariationByContent;if(overlapsRef||overflowsBoundaries||flippedVariation){// this boolean to detect any flip loop
  data.flipped=true;if(overlapsRef||overflowsBoundaries){placement=flipOrder[index+1];}if(flippedVariation){variation=getOppositeVariation(variation);}data.placement=placement+(variation?'-'+variation:'');// this object contains `position`, we want to preserve it along with
  // any additional property we may add in the future
  data.offsets.popper=_extends({},data.offsets.popper,getPopperOffsets(data.instance.popper,data.offsets.reference,data.placement));data=runModifiers(data.instance.modifiers,data,'flip');}});return data;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function keepTogether(data){var _data$offsets=data.offsets,popper=_data$offsets.popper,reference=_data$offsets.reference;var placement=data.placement.split('-')[0];var floor=Math.floor;var isVertical=['top','bottom'].indexOf(placement)!==-1;var side=isVertical?'right':'bottom';var opSide=isVertical?'left':'top';var measurement=isVertical?'width':'height';if(popper[side]<floor(reference[opSide])){data.offsets.popper[opSide]=floor(reference[opSide])-popper[measurement];}if(popper[opSide]>floor(reference[side])){data.offsets.popper[opSide]=floor(reference[side]);}return data;}/**
   * Converts a string containing value + unit into a px value number
   * @function
   * @memberof {modifiers~offset}
   * @private
   * @argument {String} str - Value + unit string
   * @argument {String} measurement - `height` or `width`
   * @argument {Object} popperOffsets
   * @argument {Object} referenceOffsets
   * @returns {Number|String}
   * Value in pixels, or original string if no values were extracted
   */function toValue(str,measurement,popperOffsets,referenceOffsets){// separate value from unit
  var split=str.match(/((?:\-|\+)?\d*\.?\d*)(.*)/);var value=+split[1];var unit=split[2];// If it's not a number it's an operator, I guess
  if(!value){return str;}if(unit.indexOf('%')===0){var element=void 0;switch(unit){case'%p':element=popperOffsets;break;case'%':case'%r':default:element=referenceOffsets;}var rect=getClientRect(element);return rect[measurement]/100*value;}else if(unit==='vh'||unit==='vw'){// if is a vh or vw, we calculate the size based on the viewport
  var size=void 0;if(unit==='vh'){size=Math.max(document.documentElement.clientHeight,window.innerHeight||0);}else{size=Math.max(document.documentElement.clientWidth,window.innerWidth||0);}return size/100*value;}else{// if is an explicit pixel unit, we get rid of the unit and keep the value
  // if is an implicit unit, it's px, and we return just the value
  return value;}}/**
   * Parse an `offset` string to extrapolate `x` and `y` numeric offsets.
   * @function
   * @memberof {modifiers~offset}
   * @private
   * @argument {String} offset
   * @argument {Object} popperOffsets
   * @argument {Object} referenceOffsets
   * @argument {String} basePlacement
   * @returns {Array} a two cells array with x and y offsets in numbers
   */function parseOffset(offset,popperOffsets,referenceOffsets,basePlacement){var offsets=[0,0];// Use height if placement is left or right and index is 0 otherwise use width
  // in this way the first offset will use an axis and the second one
  // will use the other one
  var useHeight=['right','left'].indexOf(basePlacement)!==-1;// Split the offset string to obtain a list of values and operands
  // The regex addresses values with the plus or minus sign in front (+10, -20, etc)
  var fragments=offset.split(/(\+|\-)/).map(function(frag){return frag.trim();});// Detect if the offset string contains a pair of values or a single one
  // they could be separated by comma or space
  var divider=fragments.indexOf(find(fragments,function(frag){return frag.search(/,|\s/)!==-1;}));if(fragments[divider]&&fragments[divider].indexOf(',')===-1){console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');}// If divider is found, we divide the list of values and operands to divide
  // them by ofset X and Y.
  var splitRegex=/\s*,\s*|\s+/;var ops=divider!==-1?[fragments.slice(0,divider).concat([fragments[divider].split(splitRegex)[0]]),[fragments[divider].split(splitRegex)[1]].concat(fragments.slice(divider+1))]:[fragments];// Convert the values with units to absolute pixels to allow our computations
  ops=ops.map(function(op,index){// Most of the units rely on the orientation of the popper
  var measurement=(index===1?!useHeight:useHeight)?'height':'width';var mergeWithPrevious=false;return op// This aggregates any `+` or `-` sign that aren't considered operators
  // e.g.: 10 + +5 => [10, +, +5]
  .reduce(function(a,b){if(a[a.length-1]===''&&['+','-'].indexOf(b)!==-1){a[a.length-1]=b;mergeWithPrevious=true;return a;}else if(mergeWithPrevious){a[a.length-1]+=b;mergeWithPrevious=false;return a;}else{return a.concat(b);}},[])// Here we convert the string values into number values (in px)
  .map(function(str){return toValue(str,measurement,popperOffsets,referenceOffsets);});});// Loop trough the offsets arrays and execute the operations
  ops.forEach(function(op,index){op.forEach(function(frag,index2){if(isNumeric(frag)){offsets[index]+=frag*(op[index2-1]==='-'?-1:1);}});});return offsets;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @argument {Number|String} options.offset=0
   * The offset value as described in the modifier description
   * @returns {Object} The data object, properly modified
   */function offset(data,_ref){var offset=_ref.offset;var placement=data.placement,_data$offsets=data.offsets,popper=_data$offsets.popper,reference=_data$offsets.reference;var basePlacement=placement.split('-')[0];var offsets=void 0;if(isNumeric(+offset)){offsets=[+offset,0];}else{offsets=parseOffset(offset,popper,reference,basePlacement);}if(basePlacement==='left'){popper.top+=offsets[0];popper.left-=offsets[1];}else if(basePlacement==='right'){popper.top+=offsets[0];popper.left+=offsets[1];}else if(basePlacement==='top'){popper.left+=offsets[0];popper.top-=offsets[1];}else if(basePlacement==='bottom'){popper.left+=offsets[0];popper.top+=offsets[1];}data.popper=popper;return data;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function preventOverflow(data,options){var boundariesElement=options.boundariesElement||getOffsetParent(data.instance.popper);// If offsetParent is the reference element, we really want to
  // go one step up and use the next offsetParent as reference to
  // avoid to make this modifier completely useless and look like broken
  if(data.instance.reference===boundariesElement){boundariesElement=getOffsetParent(boundariesElement);}// NOTE: DOM access here
  // resets the popper's position so that the document size can be calculated excluding
  // the size of the popper element itself
  var transformProp=getSupportedPropertyName('transform');var popperStyles=data.instance.popper.style;// assignment to help minification
  var top=popperStyles.top,left=popperStyles.left,transform=popperStyles[transformProp];popperStyles.top='';popperStyles.left='';popperStyles[transformProp]='';var boundaries=getBoundaries(data.instance.popper,data.instance.reference,options.padding,boundariesElement,data.positionFixed);// NOTE: DOM access here
  // restores the original style properties after the offsets have been computed
  popperStyles.top=top;popperStyles.left=left;popperStyles[transformProp]=transform;options.boundaries=boundaries;var order=options.priority;var popper=data.offsets.popper;var check={primary:function primary(placement){var value=popper[placement];if(popper[placement]<boundaries[placement]&&!options.escapeWithReference){value=Math.max(popper[placement],boundaries[placement]);}return defineProperty({},placement,value);},secondary:function secondary(placement){var mainSide=placement==='right'?'left':'top';var value=popper[mainSide];if(popper[placement]>boundaries[placement]&&!options.escapeWithReference){value=Math.min(popper[mainSide],boundaries[placement]-(placement==='right'?popper.width:popper.height));}return defineProperty({},mainSide,value);}};order.forEach(function(placement){var side=['left','top'].indexOf(placement)!==-1?'primary':'secondary';popper=_extends({},popper,check[side](placement));});data.offsets.popper=popper;return data;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function shift(data){var placement=data.placement;var basePlacement=placement.split('-')[0];var shiftvariation=placement.split('-')[1];// if shift shiftvariation is specified, run the modifier
  if(shiftvariation){var _data$offsets=data.offsets,reference=_data$offsets.reference,popper=_data$offsets.popper;var isVertical=['bottom','top'].indexOf(basePlacement)!==-1;var side=isVertical?'left':'top';var measurement=isVertical?'width':'height';var shiftOffsets={start:defineProperty({},side,reference[side]),end:defineProperty({},side,reference[side]+reference[measurement]-popper[measurement])};data.offsets.popper=_extends({},popper,shiftOffsets[shiftvariation]);}return data;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function hide(data){if(!isModifierRequired(data.instance.modifiers,'hide','preventOverflow')){return data;}var refRect=data.offsets.reference;var bound=find(data.instance.modifiers,function(modifier){return modifier.name==='preventOverflow';}).boundaries;if(refRect.bottom<bound.top||refRect.left>bound.right||refRect.top>bound.bottom||refRect.right<bound.left){// Avoid unnecessary DOM access if visibility hasn't changed
  if(data.hide===true){return data;}data.hide=true;data.attributes['x-out-of-boundaries']='';}else{// Avoid unnecessary DOM access if visibility hasn't changed
  if(data.hide===false){return data;}data.hide=false;data.attributes['x-out-of-boundaries']=false;}return data;}/**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */function inner(data){var placement=data.placement;var basePlacement=placement.split('-')[0];var _data$offsets=data.offsets,popper=_data$offsets.popper,reference=_data$offsets.reference;var isHoriz=['left','right'].indexOf(basePlacement)!==-1;var subtractLength=['top','left'].indexOf(basePlacement)===-1;popper[isHoriz?'left':'top']=reference[basePlacement]-(subtractLength?popper[isHoriz?'width':'height']:0);data.placement=getOppositePlacement(placement);data.offsets.popper=getClientRect(popper);return data;}/**
   * Modifier function, each modifier can have a function of this type assigned
   * to its `fn` property.<br />
   * These functions will be called on each update, this means that you must
   * make sure they are performant enough to avoid performance bottlenecks.
   *
   * @function ModifierFn
   * @argument {dataObject} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {dataObject} The data object, properly modified
   */ /**
   * Modifiers are plugins used to alter the behavior of your poppers.<br />
   * Popper.js uses a set of 9 modifiers to provide all the basic functionalities
   * needed by the library.
   *
   * Usually you don't want to override the `order`, `fn` and `onLoad` props.
   * All the other properties are configurations that could be tweaked.
   * @namespace modifiers
   */var modifiers={/**
     * Modifier used to shift the popper on the start or end of its reference
     * element.<br />
     * It will read the variation of the `placement` property.<br />
     * It can be one either `-end` or `-start`.
     * @memberof modifiers
     * @inner
     */shift:{/** @prop {number} order=100 - Index used to define the order of execution */order:100,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:shift},/**
     * The `offset` modifier can shift your popper on both its axis.
     *
     * It accepts the following units:
     * - `px` or unit-less, interpreted as pixels
     * - `%` or `%r`, percentage relative to the length of the reference element
     * - `%p`, percentage relative to the length of the popper element
     * - `vw`, CSS viewport width unit
     * - `vh`, CSS viewport height unit
     *
     * For length is intended the main axis relative to the placement of the popper.<br />
     * This means that if the placement is `top` or `bottom`, the length will be the
     * `width`. In case of `left` or `right`, it will be the `height`.
     *
     * You can provide a single value (as `Number` or `String`), or a pair of values
     * as `String` divided by a comma or one (or more) white spaces.<br />
     * The latter is a deprecated method because it leads to confusion and will be
     * removed in v2.<br />
     * Additionally, it accepts additions and subtractions between different units.
     * Note that multiplications and divisions aren't supported.
     *
     * Valid examples are:
     * ```
     * 10
     * '10%'
     * '10, 10'
     * '10%, 10'
     * '10 + 10%'
     * '10 - 5vh + 3%'
     * '-10px + 5vh, 5px - 6%'
     * ```
     * > **NB**: If you desire to apply offsets to your poppers in a way that may make them overlap
     * > with their reference element, unfortunately, you will have to disable the `flip` modifier.
     * > You can read more on this at this [issue](https://github.com/FezVrasta/popper.js/issues/373).
     *
     * @memberof modifiers
     * @inner
     */offset:{/** @prop {number} order=200 - Index used to define the order of execution */order:200,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:offset,/** @prop {Number|String} offset=0
       * The offset value as described in the modifier description
       */offset:0},/**
     * Modifier used to prevent the popper from being positioned outside the boundary.
     *
     * A scenario exists where the reference itself is not within the boundaries.<br />
     * We can say it has "escaped the boundaries" — or just "escaped".<br />
     * In this case we need to decide whether the popper should either:
     *
     * - detach from the reference and remain "trapped" in the boundaries, or
     * - if it should ignore the boundary and "escape with its reference"
     *
     * When `escapeWithReference` is set to`true` and reference is completely
     * outside its boundaries, the popper will overflow (or completely leave)
     * the boundaries in order to remain attached to the edge of the reference.
     *
     * @memberof modifiers
     * @inner
     */preventOverflow:{/** @prop {number} order=300 - Index used to define the order of execution */order:300,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:preventOverflow,/**
       * @prop {Array} [priority=['left','right','top','bottom']]
       * Popper will try to prevent overflow following these priorities by default,
       * then, it could overflow on the left and on top of the `boundariesElement`
       */priority:['left','right','top','bottom'],/**
       * @prop {number} padding=5
       * Amount of pixel used to define a minimum distance between the boundaries
       * and the popper. This makes sure the popper always has a little padding
       * between the edges of its container
       */padding:5,/**
       * @prop {String|HTMLElement} boundariesElement='scrollParent'
       * Boundaries used by the modifier. Can be `scrollParent`, `window`,
       * `viewport` or any DOM element.
       */boundariesElement:'scrollParent'},/**
     * Modifier used to make sure the reference and its popper stay near each other
     * without leaving any gap between the two. Especially useful when the arrow is
     * enabled and you want to ensure that it points to its reference element.
     * It cares only about the first axis. You can still have poppers with margin
     * between the popper and its reference element.
     * @memberof modifiers
     * @inner
     */keepTogether:{/** @prop {number} order=400 - Index used to define the order of execution */order:400,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:keepTogether},/**
     * This modifier is used to move the `arrowElement` of the popper to make
     * sure it is positioned between the reference element and its popper element.
     * It will read the outer size of the `arrowElement` node to detect how many
     * pixels of conjunction are needed.
     *
     * It has no effect if no `arrowElement` is provided.
     * @memberof modifiers
     * @inner
     */arrow:{/** @prop {number} order=500 - Index used to define the order of execution */order:500,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:arrow,/** @prop {String|HTMLElement} element='[x-arrow]' - Selector or node used as arrow */element:'[x-arrow]'},/**
     * Modifier used to flip the popper's placement when it starts to overlap its
     * reference element.
     *
     * Requires the `preventOverflow` modifier before it in order to work.
     *
     * **NOTE:** this modifier will interrupt the current update cycle and will
     * restart it if it detects the need to flip the placement.
     * @memberof modifiers
     * @inner
     */flip:{/** @prop {number} order=600 - Index used to define the order of execution */order:600,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:flip,/**
       * @prop {String|Array} behavior='flip'
       * The behavior used to change the popper's placement. It can be one of
       * `flip`, `clockwise`, `counterclockwise` or an array with a list of valid
       * placements (with optional variations)
       */behavior:'flip',/**
       * @prop {number} padding=5
       * The popper will flip if it hits the edges of the `boundariesElement`
       */padding:5,/**
       * @prop {String|HTMLElement} boundariesElement='viewport'
       * The element which will define the boundaries of the popper position.
       * The popper will never be placed outside of the defined boundaries
       * (except if `keepTogether` is enabled)
       */boundariesElement:'viewport',/**
       * @prop {Boolean} flipVariations=false
       * The popper will switch placement variation between `-start` and `-end` when
       * the reference element overlaps its boundaries.
       *
       * The original placement should have a set variation.
       */flipVariations:false,/**
       * @prop {Boolean} flipVariationsByContent=false
       * The popper will switch placement variation between `-start` and `-end` when
       * the popper element overlaps its reference boundaries.
       *
       * The original placement should have a set variation.
       */flipVariationsByContent:false},/**
     * Modifier used to make the popper flow toward the inner of the reference element.
     * By default, when this modifier is disabled, the popper will be placed outside
     * the reference element.
     * @memberof modifiers
     * @inner
     */inner:{/** @prop {number} order=700 - Index used to define the order of execution */order:700,/** @prop {Boolean} enabled=false - Whether the modifier is enabled or not */enabled:false,/** @prop {ModifierFn} */fn:inner},/**
     * Modifier used to hide the popper when its reference element is outside of the
     * popper boundaries. It will set a `x-out-of-boundaries` attribute which can
     * be used to hide with a CSS selector the popper when its reference is
     * out of boundaries.
     *
     * Requires the `preventOverflow` modifier before it in order to work.
     * @memberof modifiers
     * @inner
     */hide:{/** @prop {number} order=800 - Index used to define the order of execution */order:800,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:hide},/**
     * Computes the style that will be applied to the popper element to gets
     * properly positioned.
     *
     * Note that this modifier will not touch the DOM, it just prepares the styles
     * so that `applyStyle` modifier can apply it. This separation is useful
     * in case you need to replace `applyStyle` with a custom implementation.
     *
     * This modifier has `850` as `order` value to maintain backward compatibility
     * with previous versions of Popper.js. Expect the modifiers ordering method
     * to change in future major versions of the library.
     *
     * @memberof modifiers
     * @inner
     */computeStyle:{/** @prop {number} order=850 - Index used to define the order of execution */order:850,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:computeStyle,/**
       * @prop {Boolean} gpuAcceleration=true
       * If true, it uses the CSS 3D transformation to position the popper.
       * Otherwise, it will use the `top` and `left` properties
       */gpuAcceleration:true,/**
       * @prop {string} [x='bottom']
       * Where to anchor the X axis (`bottom` or `top`). AKA X offset origin.
       * Change this if your popper should grow in a direction different from `bottom`
       */x:'bottom',/**
       * @prop {string} [x='left']
       * Where to anchor the Y axis (`left` or `right`). AKA Y offset origin.
       * Change this if your popper should grow in a direction different from `right`
       */y:'right'},/**
     * Applies the computed styles to the popper element.
     *
     * All the DOM manipulations are limited to this modifier. This is useful in case
     * you want to integrate Popper.js inside a framework or view library and you
     * want to delegate all the DOM manipulations to it.
     *
     * Note that if you disable this modifier, you must make sure the popper element
     * has its position set to `absolute` before Popper.js can do its work!
     *
     * Just disable this modifier and define your own to achieve the desired effect.
     *
     * @memberof modifiers
     * @inner
     */applyStyle:{/** @prop {number} order=900 - Index used to define the order of execution */order:900,/** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */enabled:true,/** @prop {ModifierFn} */fn:applyStyle,/** @prop {Function} */onLoad:applyStyleOnLoad,/**
       * @deprecated since version 1.10.0, the property moved to `computeStyle` modifier
       * @prop {Boolean} gpuAcceleration=true
       * If true, it uses the CSS 3D transformation to position the popper.
       * Otherwise, it will use the `top` and `left` properties
       */gpuAcceleration:undefined}};/**
   * The `dataObject` is an object containing all the information used by Popper.js.
   * This object is passed to modifiers and to the `onCreate` and `onUpdate` callbacks.
   * @name dataObject
   * @property {Object} data.instance The Popper.js instance
   * @property {String} data.placement Placement applied to popper
   * @property {String} data.originalPlacement Placement originally defined on init
   * @property {Boolean} data.flipped True if popper has been flipped by flip modifier
   * @property {Boolean} data.hide True if the reference element is out of boundaries, useful to know when to hide the popper
   * @property {HTMLElement} data.arrowElement Node used as arrow by arrow modifier
   * @property {Object} data.styles Any CSS property defined here will be applied to the popper. It expects the JavaScript nomenclature (eg. `marginBottom`)
   * @property {Object} data.arrowStyles Any CSS property defined here will be applied to the popper arrow. It expects the JavaScript nomenclature (eg. `marginBottom`)
   * @property {Object} data.boundaries Offsets of the popper boundaries
   * @property {Object} data.offsets The measurements of popper, reference and arrow elements
   * @property {Object} data.offsets.popper `top`, `left`, `width`, `height` values
   * @property {Object} data.offsets.reference `top`, `left`, `width`, `height` values
   * @property {Object} data.offsets.arrow] `top` and `left` offsets, only one of them will be different from 0
   */ /**
   * Default options provided to Popper.js constructor.<br />
   * These can be overridden using the `options` argument of Popper.js.<br />
   * To override an option, simply pass an object with the same
   * structure of the `options` object, as the 3rd argument. For example:
   * ```
   * new Popper(ref, pop, {
   *   modifiers: {
   *     preventOverflow: { enabled: false }
   *   }
   * })
   * ```
   * @type {Object}
   * @static
   * @memberof Popper
   */var Defaults={/**
     * Popper's placement.
     * @prop {Popper.placements} placement='bottom'
     */placement:'bottom',/**
     * Set this to true if you want popper to position it self in 'fixed' mode
     * @prop {Boolean} positionFixed=false
     */positionFixed:false,/**
     * Whether events (resize, scroll) are initially enabled.
     * @prop {Boolean} eventsEnabled=true
     */eventsEnabled:true,/**
     * Set to true if you want to automatically remove the popper when
     * you call the `destroy` method.
     * @prop {Boolean} removeOnDestroy=false
     */removeOnDestroy:false,/**
     * Callback called when the popper is created.<br />
     * By default, it is set to no-op.<br />
     * Access Popper.js instance with `data.instance`.
     * @prop {onCreate}
     */onCreate:function onCreate(){},/**
     * Callback called when the popper is updated. This callback is not called
     * on the initialization/creation of the popper, but only on subsequent
     * updates.<br />
     * By default, it is set to no-op.<br />
     * Access Popper.js instance with `data.instance`.
     * @prop {onUpdate}
     */onUpdate:function onUpdate(){},/**
     * List of modifiers used to modify the offsets before they are applied to the popper.
     * They provide most of the functionalities of Popper.js.
     * @prop {modifiers}
     */modifiers:modifiers};/**
   * @callback onCreate
   * @param {dataObject} data
   */ /**
   * @callback onUpdate
   * @param {dataObject} data
   */ // Utils
  // Methods
  var Popper=function(){/**
     * Creates a new Popper.js instance.
     * @class Popper
     * @param {Element|referenceObject} reference - The reference element used to position the popper
     * @param {Element} popper - The HTML / XML element used as the popper
     * @param {Object} options - Your custom options to override the ones defined in [Defaults](#defaults)
     * @return {Object} instance - The generated Popper.js instance
     */function Popper(reference,popper){var _this=this;var options=arguments.length>2&&arguments[2]!==undefined?arguments[2]:{};classCallCheck(this,Popper);this.scheduleUpdate=function(){return requestAnimationFrame(_this.update);};// make update() debounced, so that it only runs at most once-per-tick
  this.update=debounce(this.update.bind(this));// with {} we create a new object with the options inside it
  this.options=_extends({},Popper.Defaults,options);// init state
  this.state={isDestroyed:false,isCreated:false,scrollParents:[]};// get reference and popper elements (allow jQuery wrappers)
  this.reference=reference&&reference.jquery?reference[0]:reference;this.popper=popper&&popper.jquery?popper[0]:popper;// Deep merge modifiers options
  this.options.modifiers={};Object.keys(_extends({},Popper.Defaults.modifiers,options.modifiers)).forEach(function(name){_this.options.modifiers[name]=_extends({},Popper.Defaults.modifiers[name]||{},options.modifiers?options.modifiers[name]:{});});// Refactoring modifiers' list (Object => Array)
  this.modifiers=Object.keys(this.options.modifiers).map(function(name){return _extends({name:name},_this.options.modifiers[name]);})// sort the modifiers by order
  .sort(function(a,b){return a.order-b.order;});// modifiers have the ability to execute arbitrary code when Popper.js get inited
  // such code is executed in the same order of its modifier
  // they could add new properties to their options configuration
  // BE AWARE: don't add options to `options.modifiers.name` but to `modifierOptions`!
  this.modifiers.forEach(function(modifierOptions){if(modifierOptions.enabled&&isFunction(modifierOptions.onLoad)){modifierOptions.onLoad(_this.reference,_this.popper,_this.options,modifierOptions,_this.state);}});// fire the first update to position the popper in the right place
  this.update();var eventsEnabled=this.options.eventsEnabled;if(eventsEnabled){// setup event listeners, they will take care of update the position in specific situations
  this.enableEventListeners();}this.state.eventsEnabled=eventsEnabled;}// We can't use class properties because they don't get listed in the
  // class prototype and break stuff like Sinon stubs
  createClass(Popper,[{key:'update',value:function update$$1(){return update.call(this);}},{key:'destroy',value:function destroy$$1(){return destroy.call(this);}},{key:'enableEventListeners',value:function enableEventListeners$$1(){return enableEventListeners.call(this);}},{key:'disableEventListeners',value:function disableEventListeners$$1(){return disableEventListeners.call(this);}/**
       * Schedules an update. It will run on the next UI update available.
       * @method scheduleUpdate
       * @memberof Popper
       */ /**
       * Collection of utilities useful when writing custom modifiers.
       * Starting from version 1.7, this method is available only if you
       * include `popper-utils.js` before `popper.js`.
       *
       * **DEPRECATION**: This way to access PopperUtils is deprecated
       * and will be removed in v2! Use the PopperUtils module directly instead.
       * Due to the high instability of the methods contained in Utils, we can't
       * guarantee them to follow semver. Use them at your own risk!
       * @static
       * @private
       * @type {Object}
       * @deprecated since version 1.8
       * @member Utils
       * @memberof Popper
       */}]);return Popper;}();/**
   * The `referenceObject` is an object that provides an interface compatible with Popper.js
   * and lets you use it as replacement of a real DOM node.<br />
   * You can use this method to position a popper relatively to a set of coordinates
   * in case you don't have a DOM node to use as reference.
   *
   * ```
   * new Popper(referenceObject, popperNode);
   * ```
   *
   * NB: This feature isn't supported in Internet Explorer 10.
   * @name referenceObject
   * @property {Function} data.getBoundingClientRect
   * A function that returns a set of coordinates compatible with the native `getBoundingClientRect` method.
   * @property {number} data.clientWidth
   * An ES6 getter that will return the width of the virtual reference element.
   * @property {number} data.clientHeight
   * An ES6 getter that will return the height of the virtual reference element.
   */Popper.Utils=(typeof window!=='undefined'?window:global).PopperUtils;Popper.placements=placements;Popper.Defaults=Defaults;

  var categories=["animals","smileys","skinTones","travel","flags","objects","activities","symbols","food"];var emojiData = [{"n":["monkey_face"],"e":"🐵","c":0},{"n":["grinning"],"e":"😀","c":1},{"n":["skin-tone-2"],"e":"🏻","c":2},{"n":["earth_africa"],"e":"🌍","c":3},{"n":["checkered_flag"],"e":"🏁","c":4},{"n":["mute"],"e":"🔇","c":5},{"n":["jack_o_lantern"],"e":"🎃","c":6},{"n":["atm"],"e":"🏧","c":7},{"n":["grapes"],"e":"🍇","c":8},{"n":["earth_americas"],"e":"🌎","c":3},{"n":["grin"],"e":"😁","c":1},{"n":["melon"],"e":"🍈","c":8},{"n":["triangular_flag_on_post"],"e":"🚩","c":4},{"n":["monkey"],"e":"🐒","c":0},{"n":["christmas_tree"],"e":"🎄","c":6},{"n":["skin-tone-3"],"e":"🏼","c":2},{"n":["put_litter_in_its_place"],"e":"🚮","c":7},{"n":["speaker"],"e":"🔈","c":5},{"n":["earth_asia"],"e":"🌏","c":3},{"n":["crossed_flags"],"e":"🎌","c":4},{"n":["joy"],"e":"😂","c":1},{"n":["sound"],"e":"🔉","c":5},{"n":["watermelon"],"e":"🍉","c":8},{"n":["gorilla"],"e":"🦍","c":0},{"n":["fireworks"],"e":"🎆","c":6},{"n":["potable_water"],"e":"🚰","c":7},{"n":["skin-tone-4"],"e":"🏽","c":2},{"n":["wheelchair"],"e":"♿","c":7},{"n":["rolling_on_the_floor_laughing"],"e":"🤣","c":1},{"n":["loud_sound"],"e":"🔊","c":5},{"n":["waving_black_flag"],"e":"🏴","c":4},{"n":["tangerine"],"e":"🍊","c":8},{"n":["dog"],"e":"🐶","c":0},{"n":["sparkler"],"e":"🎇","c":6},{"n":["skin-tone-5"],"e":"🏾","c":2},{"n":["globe_with_meridians"],"e":"🌐","c":3},{"n":["skin-tone-6"],"e":"🏿","c":2},{"n":["smiley"],"e":"😃","c":1},{"n":["loudspeaker"],"e":"📢","c":5},{"n":["sparkles"],"e":"✨","c":6},{"n":["dog2"],"e":"🐕","c":0},{"n":["waving_white_flag"],"e":"🏳️","c":4},{"n":["world_map"],"e":"🗺️","c":3},{"n":["lemon"],"e":"🍋","c":8},{"n":["mens"],"e":"🚹","c":7},{"n":["womens"],"e":"🚺","c":7},{"n":["rainbow-flag"],"e":"🏳️‍🌈","c":4},{"n":["smile"],"e":"😄","c":1},{"n":["banana"],"e":"🍌","c":8},{"n":["mega"],"e":"📣","c":5},{"n":["japan"],"e":"🗾","c":3},{"n":["poodle"],"e":"🐩","c":0},{"n":["balloon"],"e":"🎈","c":6},{"n":["flag-ac"],"e":"🇦🇨","c":4},{"n":["sweat_smile"],"e":"😅","c":1},{"n":["pineapple"],"e":"🍍","c":8},{"n":["restroom"],"e":"🚻","c":7},{"n":["postal_horn"],"e":"📯","c":5},{"n":["wolf"],"e":"🐺","c":0},{"n":["tada"],"e":"🎉","c":6},{"n":["snow_capped_mountain"],"e":"🏔️","c":3},{"n":["laughing","satisfied"],"e":"😆","c":1},{"n":["apple"],"e":"🍎","c":8},{"n":["flag-ad"],"e":"🇦🇩","c":4},{"n":["fox_face"],"e":"🦊","c":0},{"n":["confetti_ball"],"e":"🎊","c":6},{"n":["bell"],"e":"🔔","c":5},{"n":["mountain"],"e":"⛰️","c":3},{"n":["baby_symbol"],"e":"🚼","c":7},{"n":["wc"],"e":"🚾","c":7},{"n":["wink"],"e":"😉","c":1},{"n":["no_bell"],"e":"🔕","c":5},{"n":["green_apple"],"e":"🍏","c":8},{"n":["tanabata_tree"],"e":"🎋","c":6},{"n":["flag-ae"],"e":"🇦🇪","c":4},{"n":["volcano"],"e":"🌋","c":3},{"n":["cat"],"e":"🐱","c":0},{"n":["flag-af"],"e":"🇦🇫","c":4},{"n":["musical_score"],"e":"🎼","c":5},{"n":["blush"],"e":"😊","c":1},{"n":["pear"],"e":"🍐","c":8},{"n":["bamboo"],"e":"🎍","c":6},{"n":["passport_control"],"e":"🛂","c":7},{"n":["mount_fuji"],"e":"🗻","c":3},{"n":["cat2"],"e":"🐈","c":0},{"n":["musical_note"],"e":"🎵","c":5},{"n":["dolls"],"e":"🎎","c":6},{"n":["lion_face"],"e":"🦁","c":0},{"n":["camping"],"e":"🏕️","c":3},{"n":["flag-ag"],"e":"🇦🇬","c":4},{"n":["customs"],"e":"🛃","c":7},{"n":["yum"],"e":"😋","c":1},{"n":["peach"],"e":"🍑","c":8},{"n":["tiger"],"e":"🐯","c":0},{"n":["notes"],"e":"🎶","c":5},{"n":["flags"],"e":"🎏","c":6},{"n":["beach_with_umbrella"],"e":"🏖️","c":3},{"n":["cherries"],"e":"🍒","c":8},{"n":["flag-ai"],"e":"🇦🇮","c":4},{"n":["baggage_claim"],"e":"🛄","c":7},{"n":["sunglasses"],"e":"😎","c":1},{"n":["left_luggage"],"e":"🛅","c":7},{"n":["wind_chime"],"e":"🎐","c":6},{"n":["strawberry"],"e":"🍓","c":8},{"n":["desert"],"e":"🏜️","c":3},{"n":["studio_microphone"],"e":"🎙️","c":5},{"n":["flag-al"],"e":"🇦🇱","c":4},{"n":["tiger2"],"e":"🐅","c":0},{"n":["heart_eyes"],"e":"😍","c":1},{"n":["desert_island"],"e":"🏝️","c":3},{"n":["kiwifruit"],"e":"🥝","c":8},{"n":["rice_scene"],"e":"🎑","c":6},{"n":["kissing_heart"],"e":"😘","c":1},{"n":["warning"],"e":"⚠️","c":7},{"n":["flag-am"],"e":"🇦🇲","c":4},{"n":["leopard"],"e":"🐆","c":0},{"n":["level_slider"],"e":"🎚️","c":5},{"n":["horse"],"e":"🐴","c":0},{"n":["children_crossing"],"e":"🚸","c":7},{"n":["ribbon"],"e":"🎀","c":6},{"n":["national_park"],"e":"🏞️","c":3},{"n":["control_knobs"],"e":"🎛️","c":5},{"n":["kissing"],"e":"😗","c":1},{"n":["tomato"],"e":"🍅","c":8},{"n":["flag-ao"],"e":"🇦🇴","c":4},{"n":["stadium"],"e":"🏟️","c":3},{"n":["flag-aq"],"e":"🇦🇶","c":4},{"n":["gift"],"e":"🎁","c":6},{"n":["no_entry"],"e":"⛔","c":7},{"n":["kissing_smiling_eyes"],"e":"😙","c":1},{"n":["coconut"],"e":"🥥","c":8},{"n":["racehorse"],"e":"🐎","c":0},{"n":["microphone"],"e":"🎤","c":5},{"n":["classical_building"],"e":"🏛️","c":3},{"n":["no_entry_sign"],"e":"🚫","c":7},{"n":["reminder_ribbon"],"e":"🎗️","c":6},{"n":["kissing_closed_eyes"],"e":"😚","c":1},{"n":["unicorn_face"],"e":"🦄","c":0},{"n":["flag-ar"],"e":"🇦🇷","c":4},{"n":["headphones"],"e":"🎧","c":5},{"n":["avocado"],"e":"🥑","c":8},{"n":["relaxed"],"e":"☺️","c":1},{"n":["zebra_face"],"e":"🦓","c":0},{"n":["eggplant"],"e":"🍆","c":8},{"n":["radio"],"e":"📻","c":5},{"n":["building_construction"],"e":"🏗️","c":3},{"n":["flag-as"],"e":"🇦🇸","c":4},{"n":["admission_tickets"],"e":"🎟️","c":6},{"n":["no_bicycles"],"e":"🚳","c":7},{"n":["no_smoking"],"e":"🚭","c":7},{"n":["slightly_smiling_face"],"e":"🙂","c":1},{"n":["flag-at"],"e":"🇦🇹","c":4},{"n":["ticket"],"e":"🎫","c":6},{"n":["saxophone"],"e":"🎷","c":5},{"n":["deer"],"e":"🦌","c":0},{"n":["house_buildings"],"e":"🏘️","c":3},{"n":["potato"],"e":"🥔","c":8},{"n":["guitar"],"e":"🎸","c":5},{"n":["carrot"],"e":"🥕","c":8},{"n":["cityscape"],"e":"🏙️","c":3},{"n":["flag-au"],"e":"🇦🇺","c":4},{"n":["do_not_litter"],"e":"🚯","c":7},{"n":["hugging_face"],"e":"🤗","c":1},{"n":["cow"],"e":"🐮","c":0},{"n":["medal"],"e":"🎖️","c":6},{"n":["musical_keyboard"],"e":"🎹","c":5},{"n":["corn"],"e":"🌽","c":8},{"n":["derelict_house_building"],"e":"🏚️","c":3},{"n":["non-potable_water"],"e":"🚱","c":7},{"n":["trophy"],"e":"🏆","c":6},{"n":["flag-aw"],"e":"🇦🇼","c":4},{"n":["star-struck","grinning_face_with_star_eyes"],"e":"🤩","c":1},{"n":["ox"],"e":"🐂","c":0},{"n":["trumpet"],"e":"🎺","c":5},{"n":["hot_pepper"],"e":"🌶️","c":8},{"n":["sports_medal"],"e":"🏅","c":6},{"n":["flag-ax"],"e":"🇦🇽","c":4},{"n":["water_buffalo"],"e":"🐃","c":0},{"n":["no_pedestrians"],"e":"🚷","c":7},{"n":["thinking_face"],"e":"🤔","c":1},{"n":["house"],"e":"🏠","c":3},{"n":["no_mobile_phones"],"e":"📵","c":7},{"n":["flag-az"],"e":"🇦🇿","c":4},{"n":["first_place_medal"],"e":"🥇","c":6},{"n":["house_with_garden"],"e":"🏡","c":3},{"n":["violin"],"e":"🎻","c":5},{"n":["face_with_raised_eyebrow","face_with_one_eyebrow_raised"],"e":"🤨","c":1},{"n":["cucumber"],"e":"🥒","c":8},{"n":["cow2"],"e":"🐄","c":0},{"n":["flag-ba"],"e":"🇧🇦","c":4},{"n":["pig"],"e":"🐷","c":0},{"n":["drum_with_drumsticks"],"e":"🥁","c":5},{"n":["underage"],"e":"🔞","c":7},{"n":["broccoli"],"e":"🥦","c":8},{"n":["office"],"e":"🏢","c":3},{"n":["second_place_medal"],"e":"🥈","c":6},{"n":["neutral_face"],"e":"😐","c":1},{"n":["third_place_medal"],"e":"🥉","c":6},{"n":["mushroom"],"e":"🍄","c":8},{"n":["flag-bb"],"e":"🇧🇧","c":4},{"n":["radioactive_sign"],"e":"☢️","c":7},{"n":["pig2"],"e":"🐖","c":0},{"n":["expressionless"],"e":"😑","c":1},{"n":["iphone"],"e":"📱","c":5},{"n":["post_office"],"e":"🏣","c":3},{"n":["european_post_office"],"e":"🏤","c":3},{"n":["soccer"],"e":"⚽","c":6},{"n":["boar"],"e":"🐗","c":0},{"n":["peanuts"],"e":"🥜","c":8},{"n":["calling"],"e":"📲","c":5},{"n":["biohazard_sign"],"e":"☣️","c":7},{"n":["flag-bd"],"e":"🇧🇩","c":4},{"n":["no_mouth"],"e":"😶","c":1},{"n":["face_with_rolling_eyes"],"e":"🙄","c":1},{"n":["phone","telephone"],"e":"☎️","c":5},{"n":["pig_nose"],"e":"🐽","c":0},{"n":["chestnut"],"e":"🌰","c":8},{"n":["arrow_up"],"e":"⬆️","c":7},{"n":["hospital"],"e":"🏥","c":3},{"n":["flag-be"],"e":"🇧🇪","c":4},{"n":["baseball"],"e":"⚾","c":6},{"n":["smirk"],"e":"😏","c":1},{"n":["arrow_upper_right"],"e":"↗️","c":7},{"n":["flag-bf"],"e":"🇧🇫","c":4},{"n":["basketball"],"e":"🏀","c":6},{"n":["ram"],"e":"🐏","c":0},{"n":["bank"],"e":"🏦","c":3},{"n":["bread"],"e":"🍞","c":8},{"n":["telephone_receiver"],"e":"📞","c":5},{"n":["croissant"],"e":"🥐","c":8},{"n":["pager"],"e":"📟","c":5},{"n":["sheep"],"e":"🐑","c":0},{"n":["arrow_right"],"e":"➡️","c":7},{"n":["persevere"],"e":"😣","c":1},{"n":["flag-bg"],"e":"🇧🇬","c":4},{"n":["volleyball"],"e":"🏐","c":6},{"n":["hotel"],"e":"🏨","c":3},{"n":["arrow_lower_right"],"e":"↘️","c":7},{"n":["goat"],"e":"🐐","c":0},{"n":["flag-bh"],"e":"🇧🇭","c":4},{"n":["love_hotel"],"e":"🏩","c":3},{"n":["disappointed_relieved"],"e":"😥","c":1},{"n":["baguette_bread"],"e":"🥖","c":8},{"n":["football"],"e":"🏈","c":6},{"n":["fax"],"e":"📠","c":5},{"n":["convenience_store"],"e":"🏪","c":3},{"n":["dromedary_camel"],"e":"🐪","c":0},{"n":["arrow_down"],"e":"⬇️","c":7},{"n":["battery"],"e":"🔋","c":5},{"n":["rugby_football"],"e":"🏉","c":6},{"n":["pretzel"],"e":"🥨","c":8},{"n":["open_mouth"],"e":"😮","c":1},{"n":["flag-bi"],"e":"🇧🇮","c":4},{"n":["flag-bj"],"e":"🇧🇯","c":4},{"n":["pancakes"],"e":"🥞","c":8},{"n":["school"],"e":"🏫","c":3},{"n":["tennis"],"e":"🎾","c":6},{"n":["zipper_mouth_face"],"e":"🤐","c":1},{"n":["camel"],"e":"🐫","c":0},{"n":["arrow_lower_left"],"e":"↙️","c":7},{"n":["electric_plug"],"e":"🔌","c":5},{"n":["cheese_wedge"],"e":"🧀","c":8},{"n":["hushed"],"e":"😯","c":1},{"n":["computer"],"e":"💻","c":5},{"n":["giraffe_face"],"e":"🦒","c":0},{"n":["8ball"],"e":"🎱","c":6},{"n":["flag-bl"],"e":"🇧🇱","c":4},{"n":["arrow_left"],"e":"⬅️","c":7},{"n":["department_store"],"e":"🏬","c":3},{"n":["meat_on_bone"],"e":"🍖","c":8},{"n":["arrow_upper_left"],"e":"↖️","c":7},{"n":["flag-bm"],"e":"🇧🇲","c":4},{"n":["sleepy"],"e":"😪","c":1},{"n":["bowling"],"e":"🎳","c":6},{"n":["factory"],"e":"🏭","c":3},{"n":["desktop_computer"],"e":"🖥️","c":5},{"n":["elephant"],"e":"🐘","c":0},{"n":["rhinoceros"],"e":"🦏","c":0},{"n":["arrow_up_down"],"e":"↕️","c":7},{"n":["cricket_bat_and_ball"],"e":"🏏","c":6},{"n":["printer"],"e":"🖨️","c":5},{"n":["poultry_leg"],"e":"🍗","c":8},{"n":["tired_face"],"e":"😫","c":1},{"n":["japanese_castle"],"e":"🏯","c":3},{"n":["flag-bn"],"e":"🇧🇳","c":4},{"n":["field_hockey_stick_and_ball"],"e":"🏑","c":6},{"n":["sleeping"],"e":"😴","c":1},{"n":["left_right_arrow"],"e":"↔️","c":7},{"n":["keyboard"],"e":"⌨️","c":5},{"n":["european_castle"],"e":"🏰","c":3},{"n":["mouse"],"e":"🐭","c":0},{"n":["flag-bo"],"e":"🇧🇴","c":4},{"n":["cut_of_meat"],"e":"🥩","c":8},{"n":["ice_hockey_stick_and_puck"],"e":"🏒","c":6},{"n":["mouse2"],"e":"🐁","c":0},{"n":["three_button_mouse"],"e":"🖱️","c":5},{"n":["leftwards_arrow_with_hook"],"e":"↩️","c":7},{"n":["bacon"],"e":"🥓","c":8},{"n":["relieved"],"e":"😌","c":1},{"n":["flag-bq"],"e":"🇧🇶","c":4},{"n":["wedding"],"e":"💒","c":3},{"n":["tokyo_tower"],"e":"🗼","c":3},{"n":["arrow_right_hook"],"e":"↪️","c":7},{"n":["hamburger"],"e":"🍔","c":8},{"n":["stuck_out_tongue"],"e":"😛","c":1},{"n":["trackball"],"e":"🖲️","c":5},{"n":["flag-br"],"e":"🇧🇷","c":4},{"n":["rat"],"e":"🐀","c":0},{"n":["table_tennis_paddle_and_ball"],"e":"🏓","c":6},{"n":["minidisc"],"e":"💽","c":5},{"n":["stuck_out_tongue_winking_eye"],"e":"😜","c":1},{"n":["fries"],"e":"🍟","c":8},{"n":["badminton_racquet_and_shuttlecock"],"e":"🏸","c":6},{"n":["statue_of_liberty"],"e":"🗽","c":3},{"n":["flag-bs"],"e":"🇧🇸","c":4},{"n":["arrow_heading_up"],"e":"⤴️","c":7},{"n":["hamster"],"e":"🐹","c":0},{"n":["stuck_out_tongue_closed_eyes"],"e":"😝","c":1},{"n":["pizza"],"e":"🍕","c":8},{"n":["boxing_glove"],"e":"🥊","c":6},{"n":["floppy_disk"],"e":"💾","c":5},{"n":["arrow_heading_down"],"e":"⤵️","c":7},{"n":["flag-bt"],"e":"🇧🇹","c":4},{"n":["rabbit"],"e":"🐰","c":0},{"n":["church"],"e":"⛪","c":3},{"n":["drooling_face"],"e":"🤤","c":1},{"n":["flag-bv"],"e":"🇧🇻","c":4},{"n":["mosque"],"e":"🕌","c":3},{"n":["rabbit2"],"e":"🐇","c":0},{"n":["hotdog"],"e":"🌭","c":8},{"n":["martial_arts_uniform"],"e":"🥋","c":6},{"n":["arrows_clockwise"],"e":"🔃","c":7},{"n":["cd"],"e":"💿","c":5},{"n":["arrows_counterclockwise"],"e":"🔄","c":7},{"n":["sandwich"],"e":"🥪","c":8},{"n":["chipmunk"],"e":"🐿️","c":0},{"n":["synagogue"],"e":"🕍","c":3},{"n":["unamused"],"e":"😒","c":1},{"n":["goal_net"],"e":"🥅","c":6},{"n":["flag-bw"],"e":"🇧🇼","c":4},{"n":["dvd"],"e":"📀","c":5},{"n":["hedgehog"],"e":"🦔","c":0},{"n":["dart"],"e":"🎯","c":6},{"n":["taco"],"e":"🌮","c":8},{"n":["back"],"e":"🔙","c":7},{"n":["flag-by"],"e":"🇧🇾","c":4},{"n":["shinto_shrine"],"e":"⛩️","c":3},{"n":["movie_camera"],"e":"🎥","c":5},{"n":["sweat"],"e":"😓","c":1},{"n":["burrito"],"e":"🌯","c":8},{"n":["flag-bz"],"e":"🇧🇿","c":4},{"n":["pensive"],"e":"😔","c":1},{"n":["kaaba"],"e":"🕋","c":3},{"n":["film_frames"],"e":"🎞️","c":5},{"n":["bat"],"e":"🦇","c":0},{"n":["golf"],"e":"⛳","c":6},{"n":["end"],"e":"🔚","c":7},{"n":["film_projector"],"e":"📽️","c":5},{"n":["bear"],"e":"🐻","c":0},{"n":["ice_skate"],"e":"⛸️","c":6},{"n":["fountain"],"e":"⛲","c":3},{"n":["confused"],"e":"😕","c":1},{"n":["flag-ca"],"e":"🇨🇦","c":4},{"n":["on"],"e":"🔛","c":7},{"n":["stuffed_flatbread"],"e":"🥙","c":8},{"n":["soon"],"e":"🔜","c":7},{"n":["upside_down_face"],"e":"🙃","c":1},{"n":["fishing_pole_and_fish"],"e":"🎣","c":6},{"n":["tent"],"e":"⛺","c":3},{"n":["clapper"],"e":"🎬","c":5},{"n":["egg"],"e":"🥚","c":8},{"n":["flag-cc"],"e":"🇨🇨","c":4},{"n":["koala"],"e":"🐨","c":0},{"n":["foggy"],"e":"🌁","c":3},{"n":["tv"],"e":"📺","c":5},{"n":["panda_face"],"e":"🐼","c":0},{"n":["fried_egg","cooking"],"e":"🍳","c":8},{"n":["top"],"e":"🔝","c":7},{"n":["flag-cd"],"e":"🇨🇩","c":4},{"n":["money_mouth_face"],"e":"🤑","c":1},{"n":["running_shirt_with_sash"],"e":"🎽","c":6},{"n":["astonished"],"e":"😲","c":1},{"n":["feet","paw_prints"],"e":"🐾","c":0},{"n":["camera"],"e":"📷","c":5},{"n":["flag-cf"],"e":"🇨🇫","c":4},{"n":["place_of_worship"],"e":"🛐","c":7},{"n":["night_with_stars"],"e":"🌃","c":3},{"n":["ski"],"e":"🎿","c":6},{"n":["shallow_pan_of_food"],"e":"🥘","c":8},{"n":["camera_with_flash"],"e":"📸","c":5},{"n":["sunrise_over_mountains"],"e":"🌄","c":3},{"n":["turkey"],"e":"🦃","c":0},{"n":["white_frowning_face"],"e":"☹️","c":1},{"n":["flag-cg"],"e":"🇨🇬","c":4},{"n":["stew"],"e":"🍲","c":8},{"n":["sled"],"e":"🛷","c":6},{"n":["atom_symbol"],"e":"⚛️","c":7},{"n":["curling_stone"],"e":"🥌","c":6},{"n":["slightly_frowning_face"],"e":"🙁","c":1},{"n":["sunrise"],"e":"🌅","c":3},{"n":["om_symbol"],"e":"🕉️","c":7},{"n":["chicken"],"e":"🐔","c":0},{"n":["bowl_with_spoon"],"e":"🥣","c":8},{"n":["flag-ch"],"e":"🇨🇭","c":4},{"n":["video_camera"],"e":"📹","c":5},{"n":["video_game"],"e":"🎮","c":6},{"n":["rooster"],"e":"🐓","c":0},{"n":["vhs"],"e":"📼","c":5},{"n":["city_sunset"],"e":"🌆","c":3},{"n":["confounded"],"e":"😖","c":1},{"n":["green_salad"],"e":"🥗","c":8},{"n":["star_of_david"],"e":"✡️","c":7},{"n":["flag-ci"],"e":"🇨🇮","c":4},{"n":["popcorn"],"e":"🍿","c":8},{"n":["city_sunrise"],"e":"🌇","c":3},{"n":["disappointed"],"e":"😞","c":1},{"n":["mag"],"e":"🔍","c":5},{"n":["hatching_chick"],"e":"🐣","c":0},{"n":["joystick"],"e":"🕹️","c":6},{"n":["wheel_of_dharma"],"e":"☸️","c":7},{"n":["flag-ck"],"e":"🇨🇰","c":4},{"n":["canned_food"],"e":"🥫","c":8},{"n":["worried"],"e":"😟","c":1},{"n":["baby_chick"],"e":"🐤","c":0},{"n":["flag-cl"],"e":"🇨🇱","c":4},{"n":["game_die"],"e":"🎲","c":6},{"n":["mag_right"],"e":"🔎","c":5},{"n":["yin_yang"],"e":"☯️","c":7},{"n":["bridge_at_night"],"e":"🌉","c":3},{"n":["spades"],"e":"♠️","c":6},{"n":["hatched_chick"],"e":"🐥","c":0},{"n":["flag-cm"],"e":"🇨🇲","c":4},{"n":["latin_cross"],"e":"✝️","c":7},{"n":["triumph"],"e":"😤","c":1},{"n":["hotsprings"],"e":"♨️","c":3},{"n":["bento"],"e":"🍱","c":8},{"n":["microscope"],"e":"🔬","c":5},{"n":["cry"],"e":"😢","c":1},{"n":["bird"],"e":"🐦","c":0},{"n":["cn","flag-cn"],"e":"🇨🇳","c":4},{"n":["telescope"],"e":"🔭","c":5},{"n":["rice_cracker"],"e":"🍘","c":8},{"n":["hearts"],"e":"♥️","c":6},{"n":["orthodox_cross"],"e":"☦️","c":7},{"n":["milky_way"],"e":"🌌","c":3},{"n":["rice_ball"],"e":"🍙","c":8},{"n":["satellite_antenna"],"e":"📡","c":5},{"n":["flag-co"],"e":"🇨🇴","c":4},{"n":["carousel_horse"],"e":"🎠","c":3},{"n":["sob"],"e":"😭","c":1},{"n":["diamonds"],"e":"♦️","c":6},{"n":["star_and_crescent"],"e":"☪️","c":7},{"n":["penguin"],"e":"🐧","c":0},{"n":["dove_of_peace"],"e":"🕊️","c":0},{"n":["flag-cp"],"e":"🇨🇵","c":4},{"n":["ferris_wheel"],"e":"🎡","c":3},{"n":["clubs"],"e":"♣️","c":6},{"n":["peace_symbol"],"e":"☮️","c":7},{"n":["candle"],"e":"🕯️","c":5},{"n":["frowning"],"e":"😦","c":1},{"n":["rice"],"e":"🍚","c":8},{"n":["flag-cr"],"e":"🇨🇷","c":4},{"n":["roller_coaster"],"e":"🎢","c":3},{"n":["menorah_with_nine_branches"],"e":"🕎","c":7},{"n":["black_joker"],"e":"🃏","c":6},{"n":["eagle"],"e":"🦅","c":0},{"n":["curry"],"e":"🍛","c":8},{"n":["bulb"],"e":"💡","c":5},{"n":["anguished"],"e":"😧","c":1},{"n":["flag-cu"],"e":"🇨🇺","c":4},{"n":["barber"],"e":"💈","c":3},{"n":["duck"],"e":"🦆","c":0},{"n":["six_pointed_star"],"e":"🔯","c":7},{"n":["ramen"],"e":"🍜","c":8},{"n":["flashlight"],"e":"🔦","c":5},{"n":["mahjong"],"e":"🀄","c":6},{"n":["fearful"],"e":"😨","c":1},{"n":["aries"],"e":"♈","c":7},{"n":["spaghetti"],"e":"🍝","c":8},{"n":["circus_tent"],"e":"🎪","c":3},{"n":["izakaya_lantern","lantern"],"e":"🏮","c":5},{"n":["flag-cv"],"e":"🇨🇻","c":4},{"n":["weary"],"e":"😩","c":1},{"n":["flower_playing_cards"],"e":"🎴","c":6},{"n":["owl"],"e":"🦉","c":0},{"n":["performing_arts"],"e":"🎭","c":3},{"n":["frog"],"e":"🐸","c":0},{"n":["flag-cw"],"e":"🇨🇼","c":4},{"n":["notebook_with_decorative_cover"],"e":"📔","c":5},{"n":["exploding_head","shocked_face_with_exploding_head"],"e":"🤯","c":1},{"n":["taurus"],"e":"♉","c":7},{"n":["sweet_potato"],"e":"🍠","c":8},{"n":["closed_book"],"e":"📕","c":5},{"n":["gemini"],"e":"♊","c":7},{"n":["frame_with_picture"],"e":"🖼️","c":3},{"n":["flag-cx"],"e":"🇨🇽","c":4},{"n":["grimacing"],"e":"😬","c":1},{"n":["crocodile"],"e":"🐊","c":0},{"n":["oden"],"e":"🍢","c":8},{"n":["flag-cy"],"e":"🇨🇾","c":4},{"n":["book","open_book"],"e":"📖","c":5},{"n":["turtle"],"e":"🐢","c":0},{"n":["art"],"e":"🎨","c":3},{"n":["sushi"],"e":"🍣","c":8},{"n":["cold_sweat"],"e":"😰","c":1},{"n":["cancer"],"e":"♋","c":7},{"n":["fried_shrimp"],"e":"🍤","c":8},{"n":["slot_machine"],"e":"🎰","c":3},{"n":["scream"],"e":"😱","c":1},{"n":["green_book"],"e":"📗","c":5},{"n":["leo"],"e":"♌","c":7},{"n":["flag-cz"],"e":"🇨🇿","c":4},{"n":["lizard"],"e":"🦎","c":0},{"n":["virgo"],"e":"♍","c":7},{"n":["steam_locomotive"],"e":"🚂","c":3},{"n":["de","flag-de"],"e":"🇩🇪","c":4},{"n":["flushed"],"e":"😳","c":1},{"n":["blue_book"],"e":"📘","c":5},{"n":["snake"],"e":"🐍","c":0},{"n":["fish_cake"],"e":"🍥","c":8},{"n":["railway_car"],"e":"🚃","c":3},{"n":["dango"],"e":"🍡","c":8},{"n":["orange_book"],"e":"📙","c":5},{"n":["libra"],"e":"♎","c":7},{"n":["dragon_face"],"e":"🐲","c":0},{"n":["flag-dg"],"e":"🇩🇬","c":4},{"n":["zany_face","grinning_face_with_one_large_and_one_small_eye"],"e":"🤪","c":1},{"n":["books"],"e":"📚","c":5},{"n":["dragon"],"e":"🐉","c":0},{"n":["flag-dj"],"e":"🇩🇯","c":4},{"n":["dumpling"],"e":"🥟","c":8},{"n":["dizzy_face"],"e":"😵","c":1},{"n":["scorpius"],"e":"♏","c":7},{"n":["bullettrain_side"],"e":"🚄","c":3},{"n":["bullettrain_front"],"e":"🚅","c":3},{"n":["notebook"],"e":"📓","c":5},{"n":["fortune_cookie"],"e":"🥠","c":8},{"n":["sagittarius"],"e":"♐","c":7},{"n":["sauropod"],"e":"🦕","c":0},{"n":["flag-dk"],"e":"🇩🇰","c":4},{"n":["rage"],"e":"😡","c":1},{"n":["ledger"],"e":"📒","c":5},{"n":["angry"],"e":"😠","c":1},{"n":["t-rex"],"e":"🦖","c":0},{"n":["capricorn"],"e":"♑","c":7},{"n":["takeout_box"],"e":"🥡","c":8},{"n":["flag-dm"],"e":"🇩🇲","c":4},{"n":["train2"],"e":"🚆","c":3},{"n":["page_with_curl"],"e":"📃","c":5},{"n":["whale"],"e":"🐳","c":0},{"n":["face_with_symbols_on_mouth","serious_face_with_symbols_covering_mouth"],"e":"🤬","c":1},{"n":["flag-do"],"e":"🇩🇴","c":4},{"n":["metro"],"e":"🚇","c":3},{"n":["icecream"],"e":"🍦","c":8},{"n":["aquarius"],"e":"♒","c":7},{"n":["flag-dz"],"e":"🇩🇿","c":4},{"n":["whale2"],"e":"🐋","c":0},{"n":["mask"],"e":"😷","c":1},{"n":["scroll"],"e":"📜","c":5},{"n":["shaved_ice"],"e":"🍧","c":8},{"n":["pisces"],"e":"♓","c":7},{"n":["light_rail"],"e":"🚈","c":3},{"n":["dolphin","flipper"],"e":"🐬","c":0},{"n":["face_with_thermometer"],"e":"🤒","c":1},{"n":["flag-ea"],"e":"🇪🇦","c":4},{"n":["ophiuchus"],"e":"⛎","c":7},{"n":["station"],"e":"🚉","c":3},{"n":["ice_cream"],"e":"🍨","c":8},{"n":["page_facing_up"],"e":"📄","c":5},{"n":["doughnut"],"e":"🍩","c":8},{"n":["face_with_head_bandage"],"e":"🤕","c":1},{"n":["fish"],"e":"🐟","c":0},{"n":["newspaper"],"e":"📰","c":5},{"n":["tram"],"e":"🚊","c":3},{"n":["flag-ec"],"e":"🇪🇨","c":4},{"n":["twisted_rightwards_arrows"],"e":"🔀","c":7},{"n":["flag-ee"],"e":"🇪🇪","c":4},{"n":["cookie"],"e":"🍪","c":8},{"n":["monorail"],"e":"🚝","c":3},{"n":["tropical_fish"],"e":"🐠","c":0},{"n":["rolled_up_newspaper"],"e":"🗞️","c":5},{"n":["nauseated_face"],"e":"🤢","c":1},{"n":["repeat"],"e":"🔁","c":7},{"n":["bookmark_tabs"],"e":"📑","c":5},{"n":["repeat_one"],"e":"🔂","c":7},{"n":["flag-eg"],"e":"🇪🇬","c":4},{"n":["mountain_railway"],"e":"🚞","c":3},{"n":["birthday"],"e":"🎂","c":8},{"n":["blowfish"],"e":"🐡","c":0},{"n":["face_vomiting","face_with_open_mouth_vomiting"],"e":"🤮","c":1},{"n":["arrow_forward"],"e":"▶️","c":7},{"n":["bookmark"],"e":"🔖","c":5},{"n":["flag-eh"],"e":"🇪🇭","c":4},{"n":["shark"],"e":"🦈","c":0},{"n":["train"],"e":"🚋","c":3},{"n":["sneezing_face"],"e":"🤧","c":1},{"n":["cake"],"e":"🍰","c":8},{"n":["bus"],"e":"🚌","c":3},{"n":["pie"],"e":"🥧","c":8},{"n":["innocent"],"e":"😇","c":1},{"n":["fast_forward"],"e":"⏩","c":7},{"n":["label"],"e":"🏷️","c":5},{"n":["octopus"],"e":"🐙","c":0},{"n":["flag-er"],"e":"🇪🇷","c":4},{"n":["black_right_pointing_double_triangle_with_vertical_bar"],"e":"⏭️","c":7},{"n":["chocolate_bar"],"e":"🍫","c":8},{"n":["oncoming_bus"],"e":"🚍","c":3},{"n":["shell"],"e":"🐚","c":0},{"n":["face_with_cowboy_hat"],"e":"🤠","c":1},{"n":["moneybag"],"e":"💰","c":5},{"n":["es","flag-es"],"e":"🇪🇸","c":4},{"n":["crab"],"e":"🦀","c":0},{"n":["yen"],"e":"💴","c":5},{"n":["flag-et"],"e":"🇪🇹","c":4},{"n":["clown_face"],"e":"🤡","c":1},{"n":["black_right_pointing_triangle_with_double_vertical_bar"],"e":"⏯️","c":7},{"n":["trolleybus"],"e":"🚎","c":3},{"n":["candy"],"e":"🍬","c":8},{"n":["lying_face"],"e":"🤥","c":1},{"n":["arrow_backward"],"e":"◀️","c":7},{"n":["dollar"],"e":"💵","c":5},{"n":["shrimp"],"e":"🦐","c":0},{"n":["minibus"],"e":"🚐","c":3},{"n":["flag-eu"],"e":"🇪🇺","c":4},{"n":["lollipop"],"e":"🍭","c":8},{"n":["squid"],"e":"🦑","c":0},{"n":["euro"],"e":"💶","c":5},{"n":["flag-fi"],"e":"🇫🇮","c":4},{"n":["ambulance"],"e":"🚑","c":3},{"n":["custard"],"e":"🍮","c":8},{"n":["shushing_face","face_with_finger_covering_closed_lips"],"e":"🤫","c":1},{"n":["rewind"],"e":"⏪","c":7},{"n":["black_left_pointing_double_triangle_with_vertical_bar"],"e":"⏮️","c":7},{"n":["face_with_hand_over_mouth","smiling_face_with_smiling_eyes_and_hand_covering_mouth"],"e":"🤭","c":1},{"n":["flag-fj"],"e":"🇫🇯","c":4},{"n":["honey_pot"],"e":"🍯","c":8},{"n":["snail"],"e":"🐌","c":0},{"n":["pound"],"e":"💷","c":5},{"n":["fire_engine"],"e":"🚒","c":3},{"n":["baby_bottle"],"e":"🍼","c":8},{"n":["flag-fk"],"e":"🇫🇰","c":4},{"n":["butterfly"],"e":"🦋","c":0},{"n":["money_with_wings"],"e":"💸","c":5},{"n":["face_with_monocle"],"e":"🧐","c":1},{"n":["police_car"],"e":"🚓","c":3},{"n":["arrow_up_small"],"e":"🔼","c":7},{"n":["flag-fm"],"e":"🇫🇲","c":4},{"n":["glass_of_milk"],"e":"🥛","c":8},{"n":["credit_card"],"e":"💳","c":5},{"n":["oncoming_police_car"],"e":"🚔","c":3},{"n":["bug"],"e":"🐛","c":0},{"n":["nerd_face"],"e":"🤓","c":1},{"n":["arrow_double_up"],"e":"⏫","c":7},{"n":["chart"],"e":"💹","c":5},{"n":["flag-fo"],"e":"🇫🇴","c":4},{"n":["ant"],"e":"🐜","c":0},{"n":["arrow_down_small"],"e":"🔽","c":7},{"n":["smiling_imp"],"e":"😈","c":1},{"n":["taxi"],"e":"🚕","c":3},{"n":["coffee"],"e":"☕","c":8},{"n":["fr","flag-fr"],"e":"🇫🇷","c":4},{"n":["oncoming_taxi"],"e":"🚖","c":3},{"n":["arrow_double_down"],"e":"⏬","c":7},{"n":["imp"],"e":"👿","c":1},{"n":["currency_exchange"],"e":"💱","c":5},{"n":["tea"],"e":"🍵","c":8},{"n":["bee","honeybee"],"e":"🐝","c":0},{"n":["heavy_dollar_sign"],"e":"💲","c":5},{"n":["car","red_car"],"e":"🚗","c":3},{"n":["sake"],"e":"🍶","c":8},{"n":["flag-ga"],"e":"🇬🇦","c":4},{"n":["beetle"],"e":"🐞","c":0},{"n":["japanese_ogre"],"e":"👹","c":1},{"n":["double_vertical_bar"],"e":"⏸️","c":7},{"n":["champagne"],"e":"🍾","c":8},{"n":["japanese_goblin"],"e":"👺","c":1},{"n":["black_square_for_stop"],"e":"⏹️","c":7},{"n":["oncoming_automobile"],"e":"🚘","c":3},{"n":["email","envelope"],"e":"✉️","c":5},{"n":["cricket"],"e":"🦗","c":0},{"n":["gb","uk","flag-gb"],"e":"🇬🇧","c":4},{"n":["black_circle_for_record"],"e":"⏺️","c":7},{"n":["flag-gd"],"e":"🇬🇩","c":4},{"n":["spider"],"e":"🕷️","c":0},{"n":["blue_car"],"e":"🚙","c":3},{"n":["skull"],"e":"💀","c":1},{"n":["e-mail"],"e":"📧","c":5},{"n":["wine_glass"],"e":"🍷","c":8},{"n":["spider_web"],"e":"🕸️","c":0},{"n":["cocktail"],"e":"🍸","c":8},{"n":["skull_and_crossbones"],"e":"☠️","c":1},{"n":["flag-ge"],"e":"🇬🇪","c":4},{"n":["eject"],"e":"⏏️","c":7},{"n":["truck"],"e":"🚚","c":3},{"n":["incoming_envelope"],"e":"📨","c":5},{"n":["tropical_drink"],"e":"🍹","c":8},{"n":["scorpion"],"e":"🦂","c":0},{"n":["cinema"],"e":"🎦","c":7},{"n":["articulated_lorry"],"e":"🚛","c":3},{"n":["envelope_with_arrow"],"e":"📩","c":5},{"n":["ghost"],"e":"👻","c":1},{"n":["flag-gf"],"e":"🇬🇫","c":4},{"n":["bouquet"],"e":"💐","c":0},{"n":["tractor"],"e":"🚜","c":3},{"n":["beer"],"e":"🍺","c":8},{"n":["outbox_tray"],"e":"📤","c":5},{"n":["low_brightness"],"e":"🔅","c":7},{"n":["alien"],"e":"👽","c":1},{"n":["flag-gg"],"e":"🇬🇬","c":4},{"n":["cherry_blossom"],"e":"🌸","c":0},{"n":["inbox_tray"],"e":"📥","c":5},{"n":["flag-gh"],"e":"🇬🇭","c":4},{"n":["bike"],"e":"🚲","c":3},{"n":["space_invader"],"e":"👾","c":1},{"n":["beers"],"e":"🍻","c":8},{"n":["high_brightness"],"e":"🔆","c":7},{"n":["package"],"e":"📦","c":5},{"n":["scooter"],"e":"🛴","c":3},{"n":["white_flower"],"e":"💮","c":0},{"n":["clinking_glasses"],"e":"🥂","c":8},{"n":["robot_face"],"e":"🤖","c":1},{"n":["signal_strength"],"e":"📶","c":7},{"n":["flag-gi"],"e":"🇬🇮","c":4},{"n":["flag-gl"],"e":"🇬🇱","c":4},{"n":["motor_scooter"],"e":"🛵","c":3},{"n":["mailbox"],"e":"📫","c":5},{"n":["vibration_mode"],"e":"📳","c":7},{"n":["hankey","poop","shit"],"e":"💩","c":1},{"n":["rosette"],"e":"🏵️","c":0},{"n":["tumbler_glass"],"e":"🥃","c":8},{"n":["cup_with_straw"],"e":"🥤","c":8},{"n":["flag-gm"],"e":"🇬🇲","c":4},{"n":["mailbox_closed"],"e":"📪","c":5},{"n":["mobile_phone_off"],"e":"📴","c":7},{"n":["busstop"],"e":"🚏","c":3},{"n":["smiley_cat"],"e":"😺","c":1},{"n":["rose"],"e":"🌹","c":0},{"n":["motorway"],"e":"🛣️","c":3},{"n":["smile_cat"],"e":"😸","c":1},{"n":["flag-gn"],"e":"🇬🇳","c":4},{"n":["wilted_flower"],"e":"🥀","c":0},{"n":["mailbox_with_mail"],"e":"📬","c":5},{"n":["chopsticks"],"e":"🥢","c":8},{"n":["female_sign"],"e":"♀️","c":7},{"n":["mailbox_with_no_mail"],"e":"📭","c":5},{"n":["knife_fork_plate"],"e":"🍽️","c":8},{"n":["hibiscus"],"e":"🌺","c":0},{"n":["flag-gp"],"e":"🇬🇵","c":4},{"n":["railway_track"],"e":"🛤️","c":3},{"n":["male_sign"],"e":"♂️","c":7},{"n":["joy_cat"],"e":"😹","c":1},{"n":["fuelpump"],"e":"⛽","c":3},{"n":["sunflower"],"e":"🌻","c":0},{"n":["postbox"],"e":"📮","c":5},{"n":["flag-gq"],"e":"🇬🇶","c":4},{"n":["heart_eyes_cat"],"e":"😻","c":1},{"n":["fork_and_knife"],"e":"🍴","c":8},{"n":["medical_symbol","staff_of_aesculapius"],"e":"⚕️","c":7},{"n":["recycle"],"e":"♻️","c":7},{"n":["spoon"],"e":"🥄","c":8},{"n":["blossom"],"e":"🌼","c":0},{"n":["rotating_light"],"e":"🚨","c":3},{"n":["smirk_cat"],"e":"😼","c":1},{"n":["ballot_box_with_ballot"],"e":"🗳️","c":5},{"n":["flag-gr"],"e":"🇬🇷","c":4},{"n":["kissing_cat"],"e":"😽","c":1},{"n":["pencil2"],"e":"✏️","c":5},{"n":["traffic_light"],"e":"🚥","c":3},{"n":["fleur_de_lis"],"e":"⚜️","c":7},{"n":["tulip"],"e":"🌷","c":0},{"n":["hocho","knife"],"e":"🔪","c":8},{"n":["flag-gs"],"e":"🇬🇸","c":4},{"n":["seedling"],"e":"🌱","c":0},{"n":["amphora"],"e":"🏺","c":8},{"n":["scream_cat"],"e":"🙀","c":1},{"n":["vertical_traffic_light"],"e":"🚦","c":3},{"n":["black_nib"],"e":"✒️","c":5},{"n":["flag-gt"],"e":"🇬🇹","c":4},{"n":["trident"],"e":"🔱","c":7},{"n":["flag-gu"],"e":"🇬🇺","c":4},{"n":["name_badge"],"e":"📛","c":7},{"n":["construction"],"e":"🚧","c":3},{"n":["lower_left_fountain_pen"],"e":"🖋️","c":5},{"n":["evergreen_tree"],"e":"🌲","c":0},{"n":["crying_cat_face"],"e":"😿","c":1},{"n":["flag-gw"],"e":"🇬🇼","c":4},{"n":["lower_left_ballpoint_pen"],"e":"🖊️","c":5},{"n":["pouting_cat"],"e":"😾","c":1},{"n":["deciduous_tree"],"e":"🌳","c":0},{"n":["octagonal_sign"],"e":"🛑","c":3},{"n":["beginner"],"e":"🔰","c":7},{"n":["flag-gy"],"e":"🇬🇾","c":4},{"n":["lower_left_paintbrush"],"e":"🖌️","c":5},{"n":["o"],"e":"⭕","c":7},{"n":["palm_tree"],"e":"🌴","c":0},{"n":["anchor"],"e":"⚓","c":3},{"n":["see_no_evil"],"e":"🙈","c":1},{"n":["boat","sailboat"],"e":"⛵","c":3},{"n":["white_check_mark"],"e":"✅","c":7},{"n":["flag-hk"],"e":"🇭🇰","c":4},{"n":["lower_left_crayon"],"e":"🖍️","c":5},{"n":["hear_no_evil"],"e":"🙉","c":1},{"n":["cactus"],"e":"🌵","c":0},{"n":["ear_of_rice"],"e":"🌾","c":0},{"n":["speak_no_evil"],"e":"🙊","c":1},{"n":["flag-hm"],"e":"🇭🇲","c":4},{"n":["ballot_box_with_check"],"e":"☑️","c":7},{"n":["canoe"],"e":"🛶","c":3},{"n":["memo","pencil"],"e":"📝","c":5},{"n":["herb"],"e":"🌿","c":0},{"n":["flag-hn"],"e":"🇭🇳","c":4},{"n":["heavy_check_mark"],"e":"✔️","c":7},{"n":["briefcase"],"e":"💼","c":5},{"n":["speedboat"],"e":"🚤","c":3},{"n":["baby"],"e":"👶","c":1,"v":{"1F3FB":{"k":"baby-1F3FB","n":"baby","e":"👶🏻"},"1F3FC":{"k":"baby-1F3FC","n":"baby","e":"👶🏼"},"1F3FD":{"k":"baby-1F3FD","n":"baby","e":"👶🏽"},"1F3FE":{"k":"baby-1F3FE","n":"baby","e":"👶🏾"},"1F3FF":{"k":"baby-1F3FF","n":"baby","e":"👶🏿"}}},{"n":["heavy_multiplication_x"],"e":"✖️","c":7},{"n":["child"],"e":"🧒","c":1,"v":{"1F3FB":{"k":"child-1F3FB","n":"child","e":"🧒🏻"},"1F3FC":{"k":"child-1F3FC","n":"child","e":"🧒🏼"},"1F3FD":{"k":"child-1F3FD","n":"child","e":"🧒🏽"},"1F3FE":{"k":"child-1F3FE","n":"child","e":"🧒🏾"},"1F3FF":{"k":"child-1F3FF","n":"child","e":"🧒🏿"}}},{"n":["shamrock"],"e":"☘️","c":0},{"n":["passenger_ship"],"e":"🛳️","c":3},{"n":["flag-hr"],"e":"🇭🇷","c":4},{"n":["file_folder"],"e":"📁","c":5},{"n":["x"],"e":"❌","c":7},{"n":["four_leaf_clover"],"e":"🍀","c":0},{"n":["open_file_folder"],"e":"📂","c":5},{"n":["boy"],"e":"👦","c":1,"v":{"1F3FB":{"k":"boy-1F3FB","n":"boy","e":"👦🏻"},"1F3FC":{"k":"boy-1F3FC","n":"boy","e":"👦🏼"},"1F3FD":{"k":"boy-1F3FD","n":"boy","e":"👦🏽"},"1F3FE":{"k":"boy-1F3FE","n":"boy","e":"👦🏾"},"1F3FF":{"k":"boy-1F3FF","n":"boy","e":"👦🏿"}}},{"n":["ferry"],"e":"⛴️","c":3},{"n":["flag-ht"],"e":"🇭🇹","c":4},{"n":["girl"],"e":"👧","c":1,"v":{"1F3FB":{"k":"girl-1F3FB","n":"girl","e":"👧🏻"},"1F3FC":{"k":"girl-1F3FC","n":"girl","e":"👧🏼"},"1F3FD":{"k":"girl-1F3FD","n":"girl","e":"👧🏽"},"1F3FE":{"k":"girl-1F3FE","n":"girl","e":"👧🏾"},"1F3FF":{"k":"girl-1F3FF","n":"girl","e":"👧🏿"}}},{"n":["negative_squared_cross_mark"],"e":"❎","c":7},{"n":["flag-hu"],"e":"🇭🇺","c":4},{"n":["card_index_dividers"],"e":"🗂️","c":5},{"n":["maple_leaf"],"e":"🍁","c":0},{"n":["motor_boat"],"e":"🛥️","c":3},{"n":["flag-ic"],"e":"🇮🇨","c":4},{"n":["fallen_leaf"],"e":"🍂","c":0},{"n":["adult"],"e":"🧑","c":1,"v":{"1F3FB":{"k":"adult-1F3FB","n":"adult","e":"🧑🏻"},"1F3FC":{"k":"adult-1F3FC","n":"adult","e":"🧑🏼"},"1F3FD":{"k":"adult-1F3FD","n":"adult","e":"🧑🏽"},"1F3FE":{"k":"adult-1F3FE","n":"adult","e":"🧑🏾"},"1F3FF":{"k":"adult-1F3FF","n":"adult","e":"🧑🏿"}}},{"n":["ship"],"e":"🚢","c":3},{"n":["heavy_plus_sign"],"e":"➕","c":7},{"n":["date"],"e":"📅","c":5},{"n":["man"],"e":"👨","c":1,"v":{"1F3FB":{"k":"man-1F3FB","n":"man","e":"👨🏻"},"1F3FC":{"k":"man-1F3FC","n":"man","e":"👨🏼"},"1F3FD":{"k":"man-1F3FD","n":"man","e":"👨🏽"},"1F3FE":{"k":"man-1F3FE","n":"man","e":"👨🏾"},"1F3FF":{"k":"man-1F3FF","n":"man","e":"👨🏿"}}},{"n":["flag-id"],"e":"🇮🇩","c":4},{"n":["leaves"],"e":"🍃","c":0},{"n":["heavy_minus_sign"],"e":"➖","c":7},{"n":["calendar"],"e":"📆","c":5},{"n":["airplane"],"e":"✈️","c":3},{"n":["spiral_note_pad"],"e":"🗒️","c":5},{"n":["heavy_division_sign"],"e":"➗","c":7},{"n":["small_airplane"],"e":"🛩️","c":3},{"n":["woman"],"e":"👩","c":1,"v":{"1F3FB":{"k":"woman-1F3FB","n":"woman","e":"👩🏻"},"1F3FC":{"k":"woman-1F3FC","n":"woman","e":"👩🏼"},"1F3FD":{"k":"woman-1F3FD","n":"woman","e":"👩🏽"},"1F3FE":{"k":"woman-1F3FE","n":"woman","e":"👩🏾"},"1F3FF":{"k":"woman-1F3FF","n":"woman","e":"👩🏿"}}},{"n":["flag-ie"],"e":"🇮🇪","c":4},{"n":["curly_loop"],"e":"➰","c":7},{"n":["flag-il"],"e":"🇮🇱","c":4},{"n":["airplane_departure"],"e":"🛫","c":3},{"n":["spiral_calendar_pad"],"e":"🗓️","c":5},{"n":["older_adult"],"e":"🧓","c":1,"v":{"1F3FB":{"k":"older_adult-1F3FB","n":"older_adult","e":"🧓🏻"},"1F3FC":{"k":"older_adult-1F3FC","n":"older_adult","e":"🧓🏼"},"1F3FD":{"k":"older_adult-1F3FD","n":"older_adult","e":"🧓🏽"},"1F3FE":{"k":"older_adult-1F3FE","n":"older_adult","e":"🧓🏾"},"1F3FF":{"k":"older_adult-1F3FF","n":"older_adult","e":"🧓🏿"}}},{"n":["airplane_arriving"],"e":"🛬","c":3},{"n":["card_index"],"e":"📇","c":5},{"n":["loop"],"e":"➿","c":7},{"n":["older_man"],"e":"👴","c":1,"v":{"1F3FB":{"k":"older_man-1F3FB","n":"older_man","e":"👴🏻"},"1F3FC":{"k":"older_man-1F3FC","n":"older_man","e":"👴🏼"},"1F3FD":{"k":"older_man-1F3FD","n":"older_man","e":"👴🏽"},"1F3FE":{"k":"older_man-1F3FE","n":"older_man","e":"👴🏾"},"1F3FF":{"k":"older_man-1F3FF","n":"older_man","e":"👴🏿"}}},{"n":["flag-im"],"e":"🇮🇲","c":4},{"n":["flag-in"],"e":"🇮🇳","c":4},{"n":["chart_with_upwards_trend"],"e":"📈","c":5},{"n":["part_alternation_mark"],"e":"〽️","c":7},{"n":["seat"],"e":"💺","c":3},{"n":["older_woman"],"e":"👵","c":1,"v":{"1F3FB":{"k":"older_woman-1F3FB","n":"older_woman","e":"👵🏻"},"1F3FC":{"k":"older_woman-1F3FC","n":"older_woman","e":"👵🏼"},"1F3FD":{"k":"older_woman-1F3FD","n":"older_woman","e":"👵🏽"},"1F3FE":{"k":"older_woman-1F3FE","n":"older_woman","e":"👵🏾"},"1F3FF":{"k":"older_woman-1F3FF","n":"older_woman","e":"👵🏿"}}},{"n":["eight_spoked_asterisk"],"e":"✳️","c":7},{"n":["chart_with_downwards_trend"],"e":"📉","c":5},{"n":["flag-io"],"e":"🇮🇴","c":4},{"n":["male-doctor"],"e":"👨‍⚕️","c":1,"v":{"1F3FB":{"k":"male-doctor-1F3FB","n":"male-doctor","e":"👨🏻‍⚕️"},"1F3FC":{"k":"male-doctor-1F3FC","n":"male-doctor","e":"👨🏼‍⚕️"},"1F3FD":{"k":"male-doctor-1F3FD","n":"male-doctor","e":"👨🏽‍⚕️"},"1F3FE":{"k":"male-doctor-1F3FE","n":"male-doctor","e":"👨🏾‍⚕️"},"1F3FF":{"k":"male-doctor-1F3FF","n":"male-doctor","e":"👨🏿‍⚕️"}}},{"n":["helicopter"],"e":"🚁","c":3},{"n":["female-doctor"],"e":"👩‍⚕️","c":1,"v":{"1F3FB":{"k":"female-doctor-1F3FB","n":"female-doctor","e":"👩🏻‍⚕️"},"1F3FC":{"k":"female-doctor-1F3FC","n":"female-doctor","e":"👩🏼‍⚕️"},"1F3FD":{"k":"female-doctor-1F3FD","n":"female-doctor","e":"👩🏽‍⚕️"},"1F3FE":{"k":"female-doctor-1F3FE","n":"female-doctor","e":"👩🏾‍⚕️"},"1F3FF":{"k":"female-doctor-1F3FF","n":"female-doctor","e":"👩🏿‍⚕️"}}},{"n":["suspension_railway"],"e":"🚟","c":3},{"n":["bar_chart"],"e":"📊","c":5},{"n":["flag-iq"],"e":"🇮🇶","c":4},{"n":["eight_pointed_black_star"],"e":"✴️","c":7},{"n":["mountain_cableway"],"e":"🚠","c":3},{"n":["male-student"],"e":"👨‍🎓","c":1,"v":{"1F3FB":{"k":"male-student-1F3FB","n":"male-student","e":"👨🏻‍🎓"},"1F3FC":{"k":"male-student-1F3FC","n":"male-student","e":"👨🏼‍🎓"},"1F3FD":{"k":"male-student-1F3FD","n":"male-student","e":"👨🏽‍🎓"},"1F3FE":{"k":"male-student-1F3FE","n":"male-student","e":"👨🏾‍🎓"},"1F3FF":{"k":"male-student-1F3FF","n":"male-student","e":"👨🏿‍🎓"}}},{"n":["clipboard"],"e":"📋","c":5},{"n":["flag-ir"],"e":"🇮🇷","c":4},{"n":["sparkle"],"e":"❇️","c":7},{"n":["female-student"],"e":"👩‍🎓","c":1,"v":{"1F3FB":{"k":"female-student-1F3FB","n":"female-student","e":"👩🏻‍🎓"},"1F3FC":{"k":"female-student-1F3FC","n":"female-student","e":"👩🏼‍🎓"},"1F3FD":{"k":"female-student-1F3FD","n":"female-student","e":"👩🏽‍🎓"},"1F3FE":{"k":"female-student-1F3FE","n":"female-student","e":"👩🏾‍🎓"},"1F3FF":{"k":"female-student-1F3FF","n":"female-student","e":"👩🏿‍🎓"}}},{"n":["pushpin"],"e":"📌","c":5},{"n":["aerial_tramway"],"e":"🚡","c":3},{"n":["flag-is"],"e":"🇮🇸","c":4},{"n":["bangbang"],"e":"‼️","c":7},{"n":["interrobang"],"e":"⁉️","c":7},{"n":["satellite"],"e":"🛰️","c":3},{"n":["it","flag-it"],"e":"🇮🇹","c":4},{"n":["male-teacher"],"e":"👨‍🏫","c":1,"v":{"1F3FB":{"k":"male-teacher-1F3FB","n":"male-teacher","e":"👨🏻‍🏫"},"1F3FC":{"k":"male-teacher-1F3FC","n":"male-teacher","e":"👨🏼‍🏫"},"1F3FD":{"k":"male-teacher-1F3FD","n":"male-teacher","e":"👨🏽‍🏫"},"1F3FE":{"k":"male-teacher-1F3FE","n":"male-teacher","e":"👨🏾‍🏫"},"1F3FF":{"k":"male-teacher-1F3FF","n":"male-teacher","e":"👨🏿‍🏫"}}},{"n":["round_pushpin"],"e":"📍","c":5},{"n":["flag-je"],"e":"🇯🇪","c":4},{"n":["question"],"e":"❓","c":7},{"n":["rocket"],"e":"🚀","c":3},{"n":["female-teacher"],"e":"👩‍🏫","c":1,"v":{"1F3FB":{"k":"female-teacher-1F3FB","n":"female-teacher","e":"👩🏻‍🏫"},"1F3FC":{"k":"female-teacher-1F3FC","n":"female-teacher","e":"👩🏼‍🏫"},"1F3FD":{"k":"female-teacher-1F3FD","n":"female-teacher","e":"👩🏽‍🏫"},"1F3FE":{"k":"female-teacher-1F3FE","n":"female-teacher","e":"👩🏾‍🏫"},"1F3FF":{"k":"female-teacher-1F3FF","n":"female-teacher","e":"👩🏿‍🏫"}}},{"n":["paperclip"],"e":"📎","c":5},{"n":["linked_paperclips"],"e":"🖇️","c":5},{"n":["flying_saucer"],"e":"🛸","c":3},{"n":["male-judge"],"e":"👨‍⚖️","c":1,"v":{"1F3FB":{"k":"male-judge-1F3FB","n":"male-judge","e":"👨🏻‍⚖️"},"1F3FC":{"k":"male-judge-1F3FC","n":"male-judge","e":"👨🏼‍⚖️"},"1F3FD":{"k":"male-judge-1F3FD","n":"male-judge","e":"👨🏽‍⚖️"},"1F3FE":{"k":"male-judge-1F3FE","n":"male-judge","e":"👨🏾‍⚖️"},"1F3FF":{"k":"male-judge-1F3FF","n":"male-judge","e":"👨🏿‍⚖️"}}},{"n":["grey_question"],"e":"❔","c":7},{"n":["flag-jm"],"e":"🇯🇲","c":4},{"n":["bellhop_bell"],"e":"🛎️","c":3},{"n":["straight_ruler"],"e":"📏","c":5},{"n":["flag-jo"],"e":"🇯🇴","c":4},{"n":["female-judge"],"e":"👩‍⚖️","c":1,"v":{"1F3FB":{"k":"female-judge-1F3FB","n":"female-judge","e":"👩🏻‍⚖️"},"1F3FC":{"k":"female-judge-1F3FC","n":"female-judge","e":"👩🏼‍⚖️"},"1F3FD":{"k":"female-judge-1F3FD","n":"female-judge","e":"👩🏽‍⚖️"},"1F3FE":{"k":"female-judge-1F3FE","n":"female-judge","e":"👩🏾‍⚖️"},"1F3FF":{"k":"female-judge-1F3FF","n":"female-judge","e":"👩🏿‍⚖️"}}},{"n":["grey_exclamation"],"e":"❕","c":7},{"n":["door"],"e":"🚪","c":3},{"n":["male-farmer"],"e":"👨‍🌾","c":1,"v":{"1F3FB":{"k":"male-farmer-1F3FB","n":"male-farmer","e":"👨🏻‍🌾"},"1F3FC":{"k":"male-farmer-1F3FC","n":"male-farmer","e":"👨🏼‍🌾"},"1F3FD":{"k":"male-farmer-1F3FD","n":"male-farmer","e":"👨🏽‍🌾"},"1F3FE":{"k":"male-farmer-1F3FE","n":"male-farmer","e":"👨🏾‍🌾"},"1F3FF":{"k":"male-farmer-1F3FF","n":"male-farmer","e":"👨🏿‍🌾"}}},{"n":["jp","flag-jp"],"e":"🇯🇵","c":4},{"n":["triangular_ruler"],"e":"📐","c":5},{"n":["exclamation","heavy_exclamation_mark"],"e":"❗","c":7},{"n":["bed"],"e":"🛏️","c":3},{"n":["female-farmer"],"e":"👩‍🌾","c":1,"v":{"1F3FB":{"k":"female-farmer-1F3FB","n":"female-farmer","e":"👩🏻‍🌾"},"1F3FC":{"k":"female-farmer-1F3FC","n":"female-farmer","e":"👩🏼‍🌾"},"1F3FD":{"k":"female-farmer-1F3FD","n":"female-farmer","e":"👩🏽‍🌾"},"1F3FE":{"k":"female-farmer-1F3FE","n":"female-farmer","e":"👩🏾‍🌾"},"1F3FF":{"k":"female-farmer-1F3FF","n":"female-farmer","e":"👩🏿‍🌾"}}},{"n":["scissors"],"e":"✂️","c":5},{"n":["wavy_dash"],"e":"〰️","c":7},{"n":["flag-ke"],"e":"🇰🇪","c":4},{"n":["flag-kg"],"e":"🇰🇬","c":4},{"n":["couch_and_lamp"],"e":"🛋️","c":3},{"n":["male-cook"],"e":"👨‍🍳","c":1,"v":{"1F3FB":{"k":"male-cook-1F3FB","n":"male-cook","e":"👨🏻‍🍳"},"1F3FC":{"k":"male-cook-1F3FC","n":"male-cook","e":"👨🏼‍🍳"},"1F3FD":{"k":"male-cook-1F3FD","n":"male-cook","e":"👨🏽‍🍳"},"1F3FE":{"k":"male-cook-1F3FE","n":"male-cook","e":"👨🏾‍🍳"},"1F3FF":{"k":"male-cook-1F3FF","n":"male-cook","e":"👨🏿‍🍳"}}},{"n":["card_file_box"],"e":"🗃️","c":5},{"n":["copyright"],"e":"©️","c":7},{"n":["file_cabinet"],"e":"🗄️","c":5},{"n":["registered"],"e":"®️","c":7},{"n":["flag-kh"],"e":"🇰🇭","c":4},{"n":["female-cook"],"e":"👩‍🍳","c":1,"v":{"1F3FB":{"k":"female-cook-1F3FB","n":"female-cook","e":"👩🏻‍🍳"},"1F3FC":{"k":"female-cook-1F3FC","n":"female-cook","e":"👩🏼‍🍳"},"1F3FD":{"k":"female-cook-1F3FD","n":"female-cook","e":"👩🏽‍🍳"},"1F3FE":{"k":"female-cook-1F3FE","n":"female-cook","e":"👩🏾‍🍳"},"1F3FF":{"k":"female-cook-1F3FF","n":"female-cook","e":"👩🏿‍🍳"}}},{"n":["toilet"],"e":"🚽","c":3},{"n":["wastebasket"],"e":"🗑️","c":5},{"n":["flag-ki"],"e":"🇰🇮","c":4},{"n":["shower"],"e":"🚿","c":3},{"n":["male-mechanic"],"e":"👨‍🔧","c":1,"v":{"1F3FB":{"k":"male-mechanic-1F3FB","n":"male-mechanic","e":"👨🏻‍🔧"},"1F3FC":{"k":"male-mechanic-1F3FC","n":"male-mechanic","e":"👨🏼‍🔧"},"1F3FD":{"k":"male-mechanic-1F3FD","n":"male-mechanic","e":"👨🏽‍🔧"},"1F3FE":{"k":"male-mechanic-1F3FE","n":"male-mechanic","e":"👨🏾‍🔧"},"1F3FF":{"k":"male-mechanic-1F3FF","n":"male-mechanic","e":"👨🏿‍🔧"}}},{"n":["tm"],"e":"™️","c":7},{"n":["hash"],"e":"#️⃣","c":7},{"n":["flag-km"],"e":"🇰🇲","c":4},{"n":["bathtub"],"e":"🛁","c":3},{"n":["female-mechanic"],"e":"👩‍🔧","c":1,"v":{"1F3FB":{"k":"female-mechanic-1F3FB","n":"female-mechanic","e":"👩🏻‍🔧"},"1F3FC":{"k":"female-mechanic-1F3FC","n":"female-mechanic","e":"👩🏼‍🔧"},"1F3FD":{"k":"female-mechanic-1F3FD","n":"female-mechanic","e":"👩🏽‍🔧"},"1F3FE":{"k":"female-mechanic-1F3FE","n":"female-mechanic","e":"👩🏾‍🔧"},"1F3FF":{"k":"female-mechanic-1F3FF","n":"female-mechanic","e":"👩🏿‍🔧"}}},{"n":["lock"],"e":"🔒","c":5},{"n":["male-factory-worker"],"e":"👨‍🏭","c":1,"v":{"1F3FB":{"k":"male-factory-worker-1F3FB","n":"male-factory-worker","e":"👨🏻‍🏭"},"1F3FC":{"k":"male-factory-worker-1F3FC","n":"male-factory-worker","e":"👨🏼‍🏭"},"1F3FD":{"k":"male-factory-worker-1F3FD","n":"male-factory-worker","e":"👨🏽‍🏭"},"1F3FE":{"k":"male-factory-worker-1F3FE","n":"male-factory-worker","e":"👨🏾‍🏭"},"1F3FF":{"k":"male-factory-worker-1F3FF","n":"male-factory-worker","e":"👨🏿‍🏭"}}},{"n":["flag-kn"],"e":"🇰🇳","c":4},{"n":["hourglass"],"e":"⌛","c":3},{"n":["keycap_star"],"e":"*️⃣","c":7},{"n":["unlock"],"e":"🔓","c":5},{"n":["flag-kp"],"e":"🇰🇵","c":4},{"n":["female-factory-worker"],"e":"👩‍🏭","c":1,"v":{"1F3FB":{"k":"female-factory-worker-1F3FB","n":"female-factory-worker","e":"👩🏻‍🏭"},"1F3FC":{"k":"female-factory-worker-1F3FC","n":"female-factory-worker","e":"👩🏼‍🏭"},"1F3FD":{"k":"female-factory-worker-1F3FD","n":"female-factory-worker","e":"👩🏽‍🏭"},"1F3FE":{"k":"female-factory-worker-1F3FE","n":"female-factory-worker","e":"👩🏾‍🏭"},"1F3FF":{"k":"female-factory-worker-1F3FF","n":"female-factory-worker","e":"👩🏿‍🏭"}}},{"n":["zero"],"e":"0️⃣","c":7},{"n":["lock_with_ink_pen"],"e":"🔏","c":5},{"n":["hourglass_flowing_sand"],"e":"⏳","c":3},{"n":["one"],"e":"1️⃣","c":7},{"n":["kr","flag-kr"],"e":"🇰🇷","c":4},{"n":["watch"],"e":"⌚","c":3},{"n":["male-office-worker"],"e":"👨‍💼","c":1,"v":{"1F3FB":{"k":"male-office-worker-1F3FB","n":"male-office-worker","e":"👨🏻‍💼"},"1F3FC":{"k":"male-office-worker-1F3FC","n":"male-office-worker","e":"👨🏼‍💼"},"1F3FD":{"k":"male-office-worker-1F3FD","n":"male-office-worker","e":"👨🏽‍💼"},"1F3FE":{"k":"male-office-worker-1F3FE","n":"male-office-worker","e":"👨🏾‍💼"},"1F3FF":{"k":"male-office-worker-1F3FF","n":"male-office-worker","e":"👨🏿‍💼"}}},{"n":["closed_lock_with_key"],"e":"🔐","c":5},{"n":["female-office-worker"],"e":"👩‍💼","c":1,"v":{"1F3FB":{"k":"female-office-worker-1F3FB","n":"female-office-worker","e":"👩🏻‍💼"},"1F3FC":{"k":"female-office-worker-1F3FC","n":"female-office-worker","e":"👩🏼‍💼"},"1F3FD":{"k":"female-office-worker-1F3FD","n":"female-office-worker","e":"👩🏽‍💼"},"1F3FE":{"k":"female-office-worker-1F3FE","n":"female-office-worker","e":"👩🏾‍💼"},"1F3FF":{"k":"female-office-worker-1F3FF","n":"female-office-worker","e":"👩🏿‍💼"}}},{"n":["two"],"e":"2️⃣","c":7},{"n":["alarm_clock"],"e":"⏰","c":3},{"n":["key"],"e":"🔑","c":5},{"n":["flag-kw"],"e":"🇰🇼","c":4},{"n":["stopwatch"],"e":"⏱️","c":3},{"n":["male-scientist"],"e":"👨‍🔬","c":1,"v":{"1F3FB":{"k":"male-scientist-1F3FB","n":"male-scientist","e":"👨🏻‍🔬"},"1F3FC":{"k":"male-scientist-1F3FC","n":"male-scientist","e":"👨🏼‍🔬"},"1F3FD":{"k":"male-scientist-1F3FD","n":"male-scientist","e":"👨🏽‍🔬"},"1F3FE":{"k":"male-scientist-1F3FE","n":"male-scientist","e":"👨🏾‍🔬"},"1F3FF":{"k":"male-scientist-1F3FF","n":"male-scientist","e":"👨🏿‍🔬"}}},{"n":["three"],"e":"3️⃣","c":7},{"n":["flag-ky"],"e":"🇰🇾","c":4},{"n":["old_key"],"e":"🗝️","c":5},{"n":["flag-kz"],"e":"🇰🇿","c":4},{"n":["hammer"],"e":"🔨","c":5},{"n":["female-scientist"],"e":"👩‍🔬","c":1,"v":{"1F3FB":{"k":"female-scientist-1F3FB","n":"female-scientist","e":"👩🏻‍🔬"},"1F3FC":{"k":"female-scientist-1F3FC","n":"female-scientist","e":"👩🏼‍🔬"},"1F3FD":{"k":"female-scientist-1F3FD","n":"female-scientist","e":"👩🏽‍🔬"},"1F3FE":{"k":"female-scientist-1F3FE","n":"female-scientist","e":"👩🏾‍🔬"},"1F3FF":{"k":"female-scientist-1F3FF","n":"female-scientist","e":"👩🏿‍🔬"}}},{"n":["timer_clock"],"e":"⏲️","c":3},{"n":["four"],"e":"4️⃣","c":7},{"n":["male-technologist"],"e":"👨‍💻","c":1,"v":{"1F3FB":{"k":"male-technologist-1F3FB","n":"male-technologist","e":"👨🏻‍💻"},"1F3FC":{"k":"male-technologist-1F3FC","n":"male-technologist","e":"👨🏼‍💻"},"1F3FD":{"k":"male-technologist-1F3FD","n":"male-technologist","e":"👨🏽‍💻"},"1F3FE":{"k":"male-technologist-1F3FE","n":"male-technologist","e":"👨🏾‍💻"},"1F3FF":{"k":"male-technologist-1F3FF","n":"male-technologist","e":"👨🏿‍💻"}}},{"n":["mantelpiece_clock"],"e":"🕰️","c":3},{"n":["five"],"e":"5️⃣","c":7},{"n":["flag-la"],"e":"🇱🇦","c":4},{"n":["pick"],"e":"⛏️","c":5},{"n":["flag-lb"],"e":"🇱🇧","c":4},{"n":["clock12"],"e":"🕛","c":3},{"n":["hammer_and_pick"],"e":"⚒️","c":5},{"n":["six"],"e":"6️⃣","c":7},{"n":["female-technologist"],"e":"👩‍💻","c":1,"v":{"1F3FB":{"k":"female-technologist-1F3FB","n":"female-technologist","e":"👩🏻‍💻"},"1F3FC":{"k":"female-technologist-1F3FC","n":"female-technologist","e":"👩🏼‍💻"},"1F3FD":{"k":"female-technologist-1F3FD","n":"female-technologist","e":"👩🏽‍💻"},"1F3FE":{"k":"female-technologist-1F3FE","n":"female-technologist","e":"👩🏾‍💻"},"1F3FF":{"k":"female-technologist-1F3FF","n":"female-technologist","e":"👩🏿‍💻"}}},{"n":["hammer_and_wrench"],"e":"🛠️","c":5},{"n":["flag-lc"],"e":"🇱🇨","c":4},{"n":["clock1230"],"e":"🕧","c":3},{"n":["seven"],"e":"7️⃣","c":7},{"n":["male-singer"],"e":"👨‍🎤","c":1,"v":{"1F3FB":{"k":"male-singer-1F3FB","n":"male-singer","e":"👨🏻‍🎤"},"1F3FC":{"k":"male-singer-1F3FC","n":"male-singer","e":"👨🏼‍🎤"},"1F3FD":{"k":"male-singer-1F3FD","n":"male-singer","e":"👨🏽‍🎤"},"1F3FE":{"k":"male-singer-1F3FE","n":"male-singer","e":"👨🏾‍🎤"},"1F3FF":{"k":"male-singer-1F3FF","n":"male-singer","e":"👨🏿‍🎤"}}},{"n":["eight"],"e":"8️⃣","c":7},{"n":["flag-li"],"e":"🇱🇮","c":4},{"n":["dagger_knife"],"e":"🗡️","c":5},{"n":["clock1"],"e":"🕐","c":3},{"n":["female-singer"],"e":"👩‍🎤","c":1,"v":{"1F3FB":{"k":"female-singer-1F3FB","n":"female-singer","e":"👩🏻‍🎤"},"1F3FC":{"k":"female-singer-1F3FC","n":"female-singer","e":"👩🏼‍🎤"},"1F3FD":{"k":"female-singer-1F3FD","n":"female-singer","e":"👩🏽‍🎤"},"1F3FE":{"k":"female-singer-1F3FE","n":"female-singer","e":"👩🏾‍🎤"},"1F3FF":{"k":"female-singer-1F3FF","n":"female-singer","e":"👩🏿‍🎤"}}},{"n":["male-artist"],"e":"👨‍🎨","c":1,"v":{"1F3FB":{"k":"male-artist-1F3FB","n":"male-artist","e":"👨🏻‍🎨"},"1F3FC":{"k":"male-artist-1F3FC","n":"male-artist","e":"👨🏼‍🎨"},"1F3FD":{"k":"male-artist-1F3FD","n":"male-artist","e":"👨🏽‍🎨"},"1F3FE":{"k":"male-artist-1F3FE","n":"male-artist","e":"👨🏾‍🎨"},"1F3FF":{"k":"male-artist-1F3FF","n":"male-artist","e":"👨🏿‍🎨"}}},{"n":["crossed_swords"],"e":"⚔️","c":5},{"n":["nine"],"e":"9️⃣","c":7},{"n":["flag-lk"],"e":"🇱🇰","c":4},{"n":["clock130"],"e":"🕜","c":3},{"n":["clock2"],"e":"🕑","c":3},{"n":["gun"],"e":"🔫","c":5},{"n":["keycap_ten"],"e":"🔟","c":7},{"n":["female-artist"],"e":"👩‍🎨","c":1,"v":{"1F3FB":{"k":"female-artist-1F3FB","n":"female-artist","e":"👩🏻‍🎨"},"1F3FC":{"k":"female-artist-1F3FC","n":"female-artist","e":"👩🏼‍🎨"},"1F3FD":{"k":"female-artist-1F3FD","n":"female-artist","e":"👩🏽‍🎨"},"1F3FE":{"k":"female-artist-1F3FE","n":"female-artist","e":"👩🏾‍🎨"},"1F3FF":{"k":"female-artist-1F3FF","n":"female-artist","e":"👩🏿‍🎨"}}},{"n":["flag-lr"],"e":"🇱🇷","c":4},{"n":["clock230"],"e":"🕝","c":3},{"n":["100"],"e":"💯","c":7},{"n":["bow_and_arrow"],"e":"🏹","c":5},{"n":["male-pilot"],"e":"👨‍✈️","c":1,"v":{"1F3FB":{"k":"male-pilot-1F3FB","n":"male-pilot","e":"👨🏻‍✈️"},"1F3FC":{"k":"male-pilot-1F3FC","n":"male-pilot","e":"👨🏼‍✈️"},"1F3FD":{"k":"male-pilot-1F3FD","n":"male-pilot","e":"👨🏽‍✈️"},"1F3FE":{"k":"male-pilot-1F3FE","n":"male-pilot","e":"👨🏾‍✈️"},"1F3FF":{"k":"male-pilot-1F3FF","n":"male-pilot","e":"👨🏿‍✈️"}}},{"n":["flag-ls"],"e":"🇱🇸","c":4},{"n":["flag-lt"],"e":"🇱🇹","c":4},{"n":["capital_abcd"],"e":"🔠","c":7},{"n":["female-pilot"],"e":"👩‍✈️","c":1,"v":{"1F3FB":{"k":"female-pilot-1F3FB","n":"female-pilot","e":"👩🏻‍✈️"},"1F3FC":{"k":"female-pilot-1F3FC","n":"female-pilot","e":"👩🏼‍✈️"},"1F3FD":{"k":"female-pilot-1F3FD","n":"female-pilot","e":"👩🏽‍✈️"},"1F3FE":{"k":"female-pilot-1F3FE","n":"female-pilot","e":"👩🏾‍✈️"},"1F3FF":{"k":"female-pilot-1F3FF","n":"female-pilot","e":"👩🏿‍✈️"}}},{"n":["clock3"],"e":"🕒","c":3},{"n":["shield"],"e":"🛡️","c":5},{"n":["male-astronaut"],"e":"👨‍🚀","c":1,"v":{"1F3FB":{"k":"male-astronaut-1F3FB","n":"male-astronaut","e":"👨🏻‍🚀"},"1F3FC":{"k":"male-astronaut-1F3FC","n":"male-astronaut","e":"👨🏼‍🚀"},"1F3FD":{"k":"male-astronaut-1F3FD","n":"male-astronaut","e":"👨🏽‍🚀"},"1F3FE":{"k":"male-astronaut-1F3FE","n":"male-astronaut","e":"👨🏾‍🚀"},"1F3FF":{"k":"male-astronaut-1F3FF","n":"male-astronaut","e":"👨🏿‍🚀"}}},{"n":["abcd"],"e":"🔡","c":7},{"n":["clock330"],"e":"🕞","c":3},{"n":["flag-lu"],"e":"🇱🇺","c":4},{"n":["wrench"],"e":"🔧","c":5},{"n":["nut_and_bolt"],"e":"🔩","c":5},{"n":["1234"],"e":"🔢","c":7},{"n":["clock4"],"e":"🕓","c":3},{"n":["female-astronaut"],"e":"👩‍🚀","c":1,"v":{"1F3FB":{"k":"female-astronaut-1F3FB","n":"female-astronaut","e":"👩🏻‍🚀"},"1F3FC":{"k":"female-astronaut-1F3FC","n":"female-astronaut","e":"👩🏼‍🚀"},"1F3FD":{"k":"female-astronaut-1F3FD","n":"female-astronaut","e":"👩🏽‍🚀"},"1F3FE":{"k":"female-astronaut-1F3FE","n":"female-astronaut","e":"👩🏾‍🚀"},"1F3FF":{"k":"female-astronaut-1F3FF","n":"female-astronaut","e":"👩🏿‍🚀"}}},{"n":["flag-lv"],"e":"🇱🇻","c":4},{"n":["gear"],"e":"⚙️","c":5},{"n":["male-firefighter"],"e":"👨‍🚒","c":1,"v":{"1F3FB":{"k":"male-firefighter-1F3FB","n":"male-firefighter","e":"👨🏻‍🚒"},"1F3FC":{"k":"male-firefighter-1F3FC","n":"male-firefighter","e":"👨🏼‍🚒"},"1F3FD":{"k":"male-firefighter-1F3FD","n":"male-firefighter","e":"👨🏽‍🚒"},"1F3FE":{"k":"male-firefighter-1F3FE","n":"male-firefighter","e":"👨🏾‍🚒"},"1F3FF":{"k":"male-firefighter-1F3FF","n":"male-firefighter","e":"👨🏿‍🚒"}}},{"n":["flag-ly"],"e":"🇱🇾","c":4},{"n":["symbols"],"e":"🔣","c":7},{"n":["clock430"],"e":"🕟","c":3},{"n":["flag-ma"],"e":"🇲🇦","c":4},{"n":["compression"],"e":"🗜️","c":5},{"n":["female-firefighter"],"e":"👩‍🚒","c":1,"v":{"1F3FB":{"k":"female-firefighter-1F3FB","n":"female-firefighter","e":"👩🏻‍🚒"},"1F3FC":{"k":"female-firefighter-1F3FC","n":"female-firefighter","e":"👩🏼‍🚒"},"1F3FD":{"k":"female-firefighter-1F3FD","n":"female-firefighter","e":"👩🏽‍🚒"},"1F3FE":{"k":"female-firefighter-1F3FE","n":"female-firefighter","e":"👩🏾‍🚒"},"1F3FF":{"k":"female-firefighter-1F3FF","n":"female-firefighter","e":"👩🏿‍🚒"}}},{"n":["abc"],"e":"🔤","c":7},{"n":["clock5"],"e":"🕔","c":3},{"n":["clock530"],"e":"🕠","c":3},{"n":["a"],"e":"🅰️","c":7},{"n":["alembic"],"e":"⚗️","c":5},{"n":["flag-mc"],"e":"🇲🇨","c":4},{"n":["cop"],"e":"👮","c":1,"v":{"1F3FB":{"k":"cop-1F3FB","n":"cop","e":"👮🏻"},"1F3FC":{"k":"cop-1F3FC","n":"cop","e":"👮🏼"},"1F3FD":{"k":"cop-1F3FD","n":"cop","e":"👮🏽"},"1F3FE":{"k":"cop-1F3FE","n":"cop","e":"👮🏾"},"1F3FF":{"k":"cop-1F3FF","n":"cop","e":"👮🏿"}}},{"n":["scales"],"e":"⚖️","c":5},{"n":["clock6"],"e":"🕕","c":3},{"n":["flag-md"],"e":"🇲🇩","c":4},{"n":["ab"],"e":"🆎","c":7},{"n":["male-police-officer"],"e":"👮‍♂️","c":1,"v":{"1F3FB":{"k":"male-police-officer-1F3FB","n":"male-police-officer","e":"👮🏻‍♂️"},"1F3FC":{"k":"male-police-officer-1F3FC","n":"male-police-officer","e":"👮🏼‍♂️"},"1F3FD":{"k":"male-police-officer-1F3FD","n":"male-police-officer","e":"👮🏽‍♂️"},"1F3FE":{"k":"male-police-officer-1F3FE","n":"male-police-officer","e":"👮🏾‍♂️"},"1F3FF":{"k":"male-police-officer-1F3FF","n":"male-police-officer","e":"👮🏿‍♂️"}}},{"n":["link"],"e":"🔗","c":5},{"n":["flag-me"],"e":"🇲🇪","c":4},{"n":["clock630"],"e":"🕡","c":3},{"n":["b"],"e":"🅱️","c":7},{"n":["female-police-officer"],"e":"👮‍♀️","c":1,"v":{"1F3FB":{"k":"female-police-officer-1F3FB","n":"female-police-officer","e":"👮🏻‍♀️"},"1F3FC":{"k":"female-police-officer-1F3FC","n":"female-police-officer","e":"👮🏼‍♀️"},"1F3FD":{"k":"female-police-officer-1F3FD","n":"female-police-officer","e":"👮🏽‍♀️"},"1F3FE":{"k":"female-police-officer-1F3FE","n":"female-police-officer","e":"👮🏾‍♀️"},"1F3FF":{"k":"female-police-officer-1F3FF","n":"female-police-officer","e":"👮🏿‍♀️"}}},{"n":["clock7"],"e":"🕖","c":3},{"n":["cl"],"e":"🆑","c":7},{"n":["sleuth_or_spy"],"e":"🕵️","c":1,"v":{"1F3FB":{"k":"sleuth_or_spy-1F3FB","n":"sleuth_or_spy","e":"🕵🏻"},"1F3FC":{"k":"sleuth_or_spy-1F3FC","n":"sleuth_or_spy","e":"🕵🏼"},"1F3FD":{"k":"sleuth_or_spy-1F3FD","n":"sleuth_or_spy","e":"🕵🏽"},"1F3FE":{"k":"sleuth_or_spy-1F3FE","n":"sleuth_or_spy","e":"🕵🏾"},"1F3FF":{"k":"sleuth_or_spy-1F3FF","n":"sleuth_or_spy","e":"🕵🏿"}}},{"n":["flag-mf"],"e":"🇲🇫","c":4},{"n":["chains"],"e":"⛓️","c":5},{"n":["syringe"],"e":"💉","c":5},{"n":["male-detective"],"e":"🕵️‍♂️","c":1,"v":{"1F3FB":{"k":"male-detective-1F3FB","n":"male-detective","e":"🕵🏻‍♂️"},"1F3FC":{"k":"male-detective-1F3FC","n":"male-detective","e":"🕵🏼‍♂️"},"1F3FD":{"k":"male-detective-1F3FD","n":"male-detective","e":"🕵🏽‍♂️"},"1F3FE":{"k":"male-detective-1F3FE","n":"male-detective","e":"🕵🏾‍♂️"},"1F3FF":{"k":"male-detective-1F3FF","n":"male-detective","e":"🕵🏿‍♂️"}}},{"n":["cool"],"e":"🆒","c":7},{"n":["clock730"],"e":"🕢","c":3},{"n":["flag-mg"],"e":"🇲🇬","c":4},{"n":["free"],"e":"🆓","c":7},{"n":["flag-mh"],"e":"🇲🇭","c":4},{"n":["clock8"],"e":"🕗","c":3},{"n":["pill"],"e":"💊","c":5},{"n":["female-detective"],"e":"🕵️‍♀️","c":1,"v":{"1F3FB":{"k":"female-detective-1F3FB","n":"female-detective","e":"🕵🏻‍♀️"},"1F3FC":{"k":"female-detective-1F3FC","n":"female-detective","e":"🕵🏼‍♀️"},"1F3FD":{"k":"female-detective-1F3FD","n":"female-detective","e":"🕵🏽‍♀️"},"1F3FE":{"k":"female-detective-1F3FE","n":"female-detective","e":"🕵🏾‍♀️"},"1F3FF":{"k":"female-detective-1F3FF","n":"female-detective","e":"🕵🏿‍♀️"}}},{"n":["clock830"],"e":"🕣","c":3},{"n":["guardsman"],"e":"💂","c":1,"v":{"1F3FB":{"k":"guardsman-1F3FB","n":"guardsman","e":"💂🏻"},"1F3FC":{"k":"guardsman-1F3FC","n":"guardsman","e":"💂🏼"},"1F3FD":{"k":"guardsman-1F3FD","n":"guardsman","e":"💂🏽"},"1F3FE":{"k":"guardsman-1F3FE","n":"guardsman","e":"💂🏾"},"1F3FF":{"k":"guardsman-1F3FF","n":"guardsman","e":"💂🏿"}}},{"n":["information_source"],"e":"ℹ️","c":7},{"n":["flag-mk"],"e":"🇲🇰","c":4},{"n":["smoking"],"e":"🚬","c":5},{"n":["id"],"e":"🆔","c":7},{"n":["clock9"],"e":"🕘","c":3},{"n":["flag-ml"],"e":"🇲🇱","c":4},{"n":["coffin"],"e":"⚰️","c":5},{"n":["male-guard"],"e":"💂‍♂️","c":1,"v":{"1F3FB":{"k":"male-guard-1F3FB","n":"male-guard","e":"💂🏻‍♂️"},"1F3FC":{"k":"male-guard-1F3FC","n":"male-guard","e":"💂🏼‍♂️"},"1F3FD":{"k":"male-guard-1F3FD","n":"male-guard","e":"💂🏽‍♂️"},"1F3FE":{"k":"male-guard-1F3FE","n":"male-guard","e":"💂🏾‍♂️"},"1F3FF":{"k":"male-guard-1F3FF","n":"male-guard","e":"💂🏿‍♂️"}}},{"n":["m"],"e":"Ⓜ️","c":7},{"n":["funeral_urn"],"e":"⚱️","c":5},{"n":["female-guard"],"e":"💂‍♀️","c":1,"v":{"1F3FB":{"k":"female-guard-1F3FB","n":"female-guard","e":"💂🏻‍♀️"},"1F3FC":{"k":"female-guard-1F3FC","n":"female-guard","e":"💂🏼‍♀️"},"1F3FD":{"k":"female-guard-1F3FD","n":"female-guard","e":"💂🏽‍♀️"},"1F3FE":{"k":"female-guard-1F3FE","n":"female-guard","e":"💂🏾‍♀️"},"1F3FF":{"k":"female-guard-1F3FF","n":"female-guard","e":"💂🏿‍♀️"}}},{"n":["flag-mm"],"e":"🇲🇲","c":4},{"n":["clock930"],"e":"🕤","c":3},{"n":["moyai"],"e":"🗿","c":5},{"n":["new"],"e":"🆕","c":7},{"n":["flag-mn"],"e":"🇲🇳","c":4},{"n":["construction_worker"],"e":"👷","c":1,"v":{"1F3FB":{"k":"construction_worker-1F3FB","n":"construction_worker","e":"👷🏻"},"1F3FC":{"k":"construction_worker-1F3FC","n":"construction_worker","e":"👷🏼"},"1F3FD":{"k":"construction_worker-1F3FD","n":"construction_worker","e":"👷🏽"},"1F3FE":{"k":"construction_worker-1F3FE","n":"construction_worker","e":"👷🏾"},"1F3FF":{"k":"construction_worker-1F3FF","n":"construction_worker","e":"👷🏿"}}},{"n":["clock10"],"e":"🕙","c":3},{"n":["clock1030"],"e":"🕥","c":3},{"n":["ng"],"e":"🆖","c":7},{"n":["male-construction-worker"],"e":"👷‍♂️","c":1,"v":{"1F3FB":{"k":"male-construction-worker-1F3FB","n":"male-construction-worker","e":"👷🏻‍♂️"},"1F3FC":{"k":"male-construction-worker-1F3FC","n":"male-construction-worker","e":"👷🏼‍♂️"},"1F3FD":{"k":"male-construction-worker-1F3FD","n":"male-construction-worker","e":"👷🏽‍♂️"},"1F3FE":{"k":"male-construction-worker-1F3FE","n":"male-construction-worker","e":"👷🏾‍♂️"},"1F3FF":{"k":"male-construction-worker-1F3FF","n":"male-construction-worker","e":"👷🏿‍♂️"}}},{"n":["flag-mo"],"e":"🇲🇴","c":4},{"n":["oil_drum"],"e":"🛢️","c":5},{"n":["o2"],"e":"🅾️","c":7},{"n":["female-construction-worker"],"e":"👷‍♀️","c":1,"v":{"1F3FB":{"k":"female-construction-worker-1F3FB","n":"female-construction-worker","e":"👷🏻‍♀️"},"1F3FC":{"k":"female-construction-worker-1F3FC","n":"female-construction-worker","e":"👷🏼‍♀️"},"1F3FD":{"k":"female-construction-worker-1F3FD","n":"female-construction-worker","e":"👷🏽‍♀️"},"1F3FE":{"k":"female-construction-worker-1F3FE","n":"female-construction-worker","e":"👷🏾‍♀️"},"1F3FF":{"k":"female-construction-worker-1F3FF","n":"female-construction-worker","e":"👷🏿‍♀️"}}},{"n":["clock11"],"e":"🕚","c":3},{"n":["crystal_ball"],"e":"🔮","c":5},{"n":["flag-mp"],"e":"🇲🇵","c":4},{"n":["flag-mq"],"e":"🇲🇶","c":4},{"n":["prince"],"e":"🤴","c":1,"v":{"1F3FB":{"k":"prince-1F3FB","n":"prince","e":"🤴🏻"},"1F3FC":{"k":"prince-1F3FC","n":"prince","e":"🤴🏼"},"1F3FD":{"k":"prince-1F3FD","n":"prince","e":"🤴🏽"},"1F3FE":{"k":"prince-1F3FE","n":"prince","e":"🤴🏾"},"1F3FF":{"k":"prince-1F3FF","n":"prince","e":"🤴🏿"}}},{"n":["ok"],"e":"🆗","c":7},{"n":["clock1130"],"e":"🕦","c":3},{"n":["shopping_trolley"],"e":"🛒","c":5},{"n":["flag-mr"],"e":"🇲🇷","c":4},{"n":["princess"],"e":"👸","c":1,"v":{"1F3FB":{"k":"princess-1F3FB","n":"princess","e":"👸🏻"},"1F3FC":{"k":"princess-1F3FC","n":"princess","e":"👸🏼"},"1F3FD":{"k":"princess-1F3FD","n":"princess","e":"👸🏽"},"1F3FE":{"k":"princess-1F3FE","n":"princess","e":"👸🏾"},"1F3FF":{"k":"princess-1F3FF","n":"princess","e":"👸🏿"}}},{"n":["new_moon"],"e":"🌑","c":3},{"n":["parking"],"e":"🅿️","c":7},{"n":["sos"],"e":"🆘","c":7},{"n":["man_with_turban"],"e":"👳","c":1,"v":{"1F3FB":{"k":"man_with_turban-1F3FB","n":"man_with_turban","e":"👳🏻"},"1F3FC":{"k":"man_with_turban-1F3FC","n":"man_with_turban","e":"👳🏼"},"1F3FD":{"k":"man_with_turban-1F3FD","n":"man_with_turban","e":"👳🏽"},"1F3FE":{"k":"man_with_turban-1F3FE","n":"man_with_turban","e":"👳🏾"},"1F3FF":{"k":"man_with_turban-1F3FF","n":"man_with_turban","e":"👳🏿"}}},{"n":["flag-ms"],"e":"🇲🇸","c":4},{"n":["waxing_crescent_moon"],"e":"🌒","c":3},{"n":["up"],"e":"🆙","c":7},{"n":["first_quarter_moon"],"e":"🌓","c":3},{"n":["flag-mt"],"e":"🇲🇹","c":4},{"n":["man-wearing-turban"],"e":"👳‍♂️","c":1,"v":{"1F3FB":{"k":"man-wearing-turban-1F3FB","n":"man-wearing-turban","e":"👳🏻‍♂️"},"1F3FC":{"k":"man-wearing-turban-1F3FC","n":"man-wearing-turban","e":"👳🏼‍♂️"},"1F3FD":{"k":"man-wearing-turban-1F3FD","n":"man-wearing-turban","e":"👳🏽‍♂️"},"1F3FE":{"k":"man-wearing-turban-1F3FE","n":"man-wearing-turban","e":"👳🏾‍♂️"},"1F3FF":{"k":"man-wearing-turban-1F3FF","n":"man-wearing-turban","e":"👳🏿‍♂️"}}},{"n":["moon","waxing_gibbous_moon"],"e":"🌔","c":3},{"n":["woman-wearing-turban"],"e":"👳‍♀️","c":1,"v":{"1F3FB":{"k":"woman-wearing-turban-1F3FB","n":"woman-wearing-turban","e":"👳🏻‍♀️"},"1F3FC":{"k":"woman-wearing-turban-1F3FC","n":"woman-wearing-turban","e":"👳🏼‍♀️"},"1F3FD":{"k":"woman-wearing-turban-1F3FD","n":"woman-wearing-turban","e":"👳🏽‍♀️"},"1F3FE":{"k":"woman-wearing-turban-1F3FE","n":"woman-wearing-turban","e":"👳🏾‍♀️"},"1F3FF":{"k":"woman-wearing-turban-1F3FF","n":"woman-wearing-turban","e":"👳🏿‍♀️"}}},{"n":["vs"],"e":"🆚","c":7},{"n":["flag-mu"],"e":"🇲🇺","c":4},{"n":["man_with_gua_pi_mao"],"e":"👲","c":1,"v":{"1F3FB":{"k":"man_with_gua_pi_mao-1F3FB","n":"man_with_gua_pi_mao","e":"👲🏻"},"1F3FC":{"k":"man_with_gua_pi_mao-1F3FC","n":"man_with_gua_pi_mao","e":"👲🏼"},"1F3FD":{"k":"man_with_gua_pi_mao-1F3FD","n":"man_with_gua_pi_mao","e":"👲🏽"},"1F3FE":{"k":"man_with_gua_pi_mao-1F3FE","n":"man_with_gua_pi_mao","e":"👲🏾"},"1F3FF":{"k":"man_with_gua_pi_mao-1F3FF","n":"man_with_gua_pi_mao","e":"👲🏿"}}},{"n":["koko"],"e":"🈁","c":7},{"n":["full_moon"],"e":"🌕","c":3},{"n":["flag-mv"],"e":"🇲🇻","c":4},{"n":["person_with_headscarf"],"e":"🧕","c":1,"v":{"1F3FB":{"k":"person_with_headscarf-1F3FB","n":"person_with_headscarf","e":"🧕🏻"},"1F3FC":{"k":"person_with_headscarf-1F3FC","n":"person_with_headscarf","e":"🧕🏼"},"1F3FD":{"k":"person_with_headscarf-1F3FD","n":"person_with_headscarf","e":"🧕🏽"},"1F3FE":{"k":"person_with_headscarf-1F3FE","n":"person_with_headscarf","e":"🧕🏾"},"1F3FF":{"k":"person_with_headscarf-1F3FF","n":"person_with_headscarf","e":"🧕🏿"}}},{"n":["waning_gibbous_moon"],"e":"🌖","c":3},{"n":["sa"],"e":"🈂️","c":7},{"n":["flag-mw"],"e":"🇲🇼","c":4},{"n":["last_quarter_moon"],"e":"🌗","c":3},{"n":["u6708"],"e":"🈷️","c":7},{"n":["bearded_person"],"e":"🧔","c":1,"v":{"1F3FB":{"k":"bearded_person-1F3FB","n":"bearded_person","e":"🧔🏻"},"1F3FC":{"k":"bearded_person-1F3FC","n":"bearded_person","e":"🧔🏼"},"1F3FD":{"k":"bearded_person-1F3FD","n":"bearded_person","e":"🧔🏽"},"1F3FE":{"k":"bearded_person-1F3FE","n":"bearded_person","e":"🧔🏾"},"1F3FF":{"k":"bearded_person-1F3FF","n":"bearded_person","e":"🧔🏿"}}},{"n":["flag-mx"],"e":"🇲🇽","c":4},{"n":["u6709"],"e":"🈶","c":7},{"n":["person_with_blond_hair"],"e":"👱","c":1,"v":{"1F3FB":{"k":"person_with_blond_hair-1F3FB","n":"person_with_blond_hair","e":"👱🏻"},"1F3FC":{"k":"person_with_blond_hair-1F3FC","n":"person_with_blond_hair","e":"👱🏼"},"1F3FD":{"k":"person_with_blond_hair-1F3FD","n":"person_with_blond_hair","e":"👱🏽"},"1F3FE":{"k":"person_with_blond_hair-1F3FE","n":"person_with_blond_hair","e":"👱🏾"},"1F3FF":{"k":"person_with_blond_hair-1F3FF","n":"person_with_blond_hair","e":"👱🏿"}}},{"n":["waning_crescent_moon"],"e":"🌘","c":3},{"n":["flag-my"],"e":"🇲🇾","c":4},{"n":["u6307"],"e":"🈯","c":7},{"n":["blond-haired-man"],"e":"👱‍♂️","c":1,"v":{"1F3FB":{"k":"blond-haired-man-1F3FB","n":"blond-haired-man","e":"👱🏻‍♂️"},"1F3FC":{"k":"blond-haired-man-1F3FC","n":"blond-haired-man","e":"👱🏼‍♂️"},"1F3FD":{"k":"blond-haired-man-1F3FD","n":"blond-haired-man","e":"👱🏽‍♂️"},"1F3FE":{"k":"blond-haired-man-1F3FE","n":"blond-haired-man","e":"👱🏾‍♂️"},"1F3FF":{"k":"blond-haired-man-1F3FF","n":"blond-haired-man","e":"👱🏿‍♂️"}}},{"n":["crescent_moon"],"e":"🌙","c":3},{"n":["flag-mz"],"e":"🇲🇿","c":4},{"n":["new_moon_with_face"],"e":"🌚","c":3},{"n":["flag-na"],"e":"🇳🇦","c":4},{"n":["blond-haired-woman"],"e":"👱‍♀️","c":1,"v":{"1F3FB":{"k":"blond-haired-woman-1F3FB","n":"blond-haired-woman","e":"👱🏻‍♀️"},"1F3FC":{"k":"blond-haired-woman-1F3FC","n":"blond-haired-woman","e":"👱🏼‍♀️"},"1F3FD":{"k":"blond-haired-woman-1F3FD","n":"blond-haired-woman","e":"👱🏽‍♀️"},"1F3FE":{"k":"blond-haired-woman-1F3FE","n":"blond-haired-woman","e":"👱🏾‍♀️"},"1F3FF":{"k":"blond-haired-woman-1F3FF","n":"blond-haired-woman","e":"👱🏿‍♀️"}}},{"n":["ideograph_advantage"],"e":"🉐","c":7},{"n":["first_quarter_moon_with_face"],"e":"🌛","c":3},{"n":["man_in_tuxedo"],"e":"🤵","c":1,"v":{"1F3FB":{"k":"man_in_tuxedo-1F3FB","n":"man_in_tuxedo","e":"🤵🏻"},"1F3FC":{"k":"man_in_tuxedo-1F3FC","n":"man_in_tuxedo","e":"🤵🏼"},"1F3FD":{"k":"man_in_tuxedo-1F3FD","n":"man_in_tuxedo","e":"🤵🏽"},"1F3FE":{"k":"man_in_tuxedo-1F3FE","n":"man_in_tuxedo","e":"🤵🏾"},"1F3FF":{"k":"man_in_tuxedo-1F3FF","n":"man_in_tuxedo","e":"🤵🏿"}}},{"n":["flag-nc"],"e":"🇳🇨","c":4},{"n":["u5272"],"e":"🈹","c":7},{"n":["flag-ne"],"e":"🇳🇪","c":4},{"n":["last_quarter_moon_with_face"],"e":"🌜","c":3},{"n":["u7121"],"e":"🈚","c":7},{"n":["bride_with_veil"],"e":"👰","c":1,"v":{"1F3FB":{"k":"bride_with_veil-1F3FB","n":"bride_with_veil","e":"👰🏻"},"1F3FC":{"k":"bride_with_veil-1F3FC","n":"bride_with_veil","e":"👰🏼"},"1F3FD":{"k":"bride_with_veil-1F3FD","n":"bride_with_veil","e":"👰🏽"},"1F3FE":{"k":"bride_with_veil-1F3FE","n":"bride_with_veil","e":"👰🏾"},"1F3FF":{"k":"bride_with_veil-1F3FF","n":"bride_with_veil","e":"👰🏿"}}},{"n":["u7981"],"e":"🈲","c":7},{"n":["pregnant_woman"],"e":"🤰","c":1,"v":{"1F3FB":{"k":"pregnant_woman-1F3FB","n":"pregnant_woman","e":"🤰🏻"},"1F3FC":{"k":"pregnant_woman-1F3FC","n":"pregnant_woman","e":"🤰🏼"},"1F3FD":{"k":"pregnant_woman-1F3FD","n":"pregnant_woman","e":"🤰🏽"},"1F3FE":{"k":"pregnant_woman-1F3FE","n":"pregnant_woman","e":"🤰🏾"},"1F3FF":{"k":"pregnant_woman-1F3FF","n":"pregnant_woman","e":"🤰🏿"}}},{"n":["thermometer"],"e":"🌡️","c":3},{"n":["flag-nf"],"e":"🇳🇫","c":4},{"n":["sunny"],"e":"☀️","c":3},{"n":["accept"],"e":"🉑","c":7},{"n":["flag-ng"],"e":"🇳🇬","c":4},{"n":["breast-feeding"],"e":"🤱","c":1,"v":{"1F3FB":{"k":"breast-feeding-1F3FB","n":"breast-feeding","e":"🤱🏻"},"1F3FC":{"k":"breast-feeding-1F3FC","n":"breast-feeding","e":"🤱🏼"},"1F3FD":{"k":"breast-feeding-1F3FD","n":"breast-feeding","e":"🤱🏽"},"1F3FE":{"k":"breast-feeding-1F3FE","n":"breast-feeding","e":"🤱🏾"},"1F3FF":{"k":"breast-feeding-1F3FF","n":"breast-feeding","e":"🤱🏿"}}},{"n":["full_moon_with_face"],"e":"🌝","c":3},{"n":["flag-ni"],"e":"🇳🇮","c":4},{"n":["u7533"],"e":"🈸","c":7},{"n":["angel"],"e":"👼","c":1,"v":{"1F3FB":{"k":"angel-1F3FB","n":"angel","e":"👼🏻"},"1F3FC":{"k":"angel-1F3FC","n":"angel","e":"👼🏼"},"1F3FD":{"k":"angel-1F3FD","n":"angel","e":"👼🏽"},"1F3FE":{"k":"angel-1F3FE","n":"angel","e":"👼🏾"},"1F3FF":{"k":"angel-1F3FF","n":"angel","e":"👼🏿"}}},{"n":["sun_with_face"],"e":"🌞","c":3},{"n":["santa"],"e":"🎅","c":1,"v":{"1F3FB":{"k":"santa-1F3FB","n":"santa","e":"🎅🏻"},"1F3FC":{"k":"santa-1F3FC","n":"santa","e":"🎅🏼"},"1F3FD":{"k":"santa-1F3FD","n":"santa","e":"🎅🏽"},"1F3FE":{"k":"santa-1F3FE","n":"santa","e":"🎅🏾"},"1F3FF":{"k":"santa-1F3FF","n":"santa","e":"🎅🏿"}}},{"n":["u5408"],"e":"🈴","c":7},{"n":["flag-nl"],"e":"🇳🇱","c":4},{"n":["mrs_claus","mother_christmas"],"e":"🤶","c":1,"v":{"1F3FB":{"k":"mrs_claus-1F3FB","n":"mrs_claus","e":"🤶🏻"},"1F3FC":{"k":"mrs_claus-1F3FC","n":"mrs_claus","e":"🤶🏼"},"1F3FD":{"k":"mrs_claus-1F3FD","n":"mrs_claus","e":"🤶🏽"},"1F3FE":{"k":"mrs_claus-1F3FE","n":"mrs_claus","e":"🤶🏾"},"1F3FF":{"k":"mrs_claus-1F3FF","n":"mrs_claus","e":"🤶🏿"}}},{"n":["u7a7a"],"e":"🈳","c":7},{"n":["star"],"e":"⭐","c":3},{"n":["flag-no"],"e":"🇳🇴","c":4},{"n":["mage"],"e":"🧙","c":1,"v":{"1F3FB":{"k":"mage-1F3FB","n":"mage","e":"🧙🏻"},"1F3FC":{"k":"mage-1F3FC","n":"mage","e":"🧙🏼"},"1F3FD":{"k":"mage-1F3FD","n":"mage","e":"🧙🏽"},"1F3FE":{"k":"mage-1F3FE","n":"mage","e":"🧙🏾"},"1F3FF":{"k":"mage-1F3FF","n":"mage","e":"🧙🏿"}}},{"n":["star2"],"e":"🌟","c":3},{"n":["flag-np"],"e":"🇳🇵","c":4},{"n":["congratulations"],"e":"㊗️","c":7},{"n":["flag-nr"],"e":"🇳🇷","c":4},{"n":["stars"],"e":"🌠","c":3},{"n":["female_mage"],"e":"🧙‍♀️","c":1,"v":{"1F3FB":{"k":"female_mage-1F3FB","n":"female_mage","e":"🧙🏻‍♀️"},"1F3FC":{"k":"female_mage-1F3FC","n":"female_mage","e":"🧙🏼‍♀️"},"1F3FD":{"k":"female_mage-1F3FD","n":"female_mage","e":"🧙🏽‍♀️"},"1F3FE":{"k":"female_mage-1F3FE","n":"female_mage","e":"🧙🏾‍♀️"},"1F3FF":{"k":"female_mage-1F3FF","n":"female_mage","e":"🧙🏿‍♀️"}}},{"n":["secret"],"e":"㊙️","c":7},{"n":["flag-nu"],"e":"🇳🇺","c":4},{"n":["u55b6"],"e":"🈺","c":7},{"n":["male_mage"],"e":"🧙‍♂️","c":1,"v":{"1F3FB":{"k":"male_mage-1F3FB","n":"male_mage","e":"🧙🏻‍♂️"},"1F3FC":{"k":"male_mage-1F3FC","n":"male_mage","e":"🧙🏼‍♂️"},"1F3FD":{"k":"male_mage-1F3FD","n":"male_mage","e":"🧙🏽‍♂️"},"1F3FE":{"k":"male_mage-1F3FE","n":"male_mage","e":"🧙🏾‍♂️"},"1F3FF":{"k":"male_mage-1F3FF","n":"male_mage","e":"🧙🏿‍♂️"}}},{"n":["cloud"],"e":"☁️","c":3},{"n":["flag-nz"],"e":"🇳🇿","c":4},{"n":["partly_sunny"],"e":"⛅","c":3},{"n":["fairy"],"e":"🧚","c":1,"v":{"1F3FB":{"k":"fairy-1F3FB","n":"fairy","e":"🧚🏻"},"1F3FC":{"k":"fairy-1F3FC","n":"fairy","e":"🧚🏼"},"1F3FD":{"k":"fairy-1F3FD","n":"fairy","e":"🧚🏽"},"1F3FE":{"k":"fairy-1F3FE","n":"fairy","e":"🧚🏾"},"1F3FF":{"k":"fairy-1F3FF","n":"fairy","e":"🧚🏿"}}},{"n":["u6e80"],"e":"🈵","c":7},{"n":["black_small_square"],"e":"▪️","c":7},{"n":["thunder_cloud_and_rain"],"e":"⛈️","c":3},{"n":["female_fairy"],"e":"🧚‍♀️","c":1,"v":{"1F3FB":{"k":"female_fairy-1F3FB","n":"female_fairy","e":"🧚🏻‍♀️"},"1F3FC":{"k":"female_fairy-1F3FC","n":"female_fairy","e":"🧚🏼‍♀️"},"1F3FD":{"k":"female_fairy-1F3FD","n":"female_fairy","e":"🧚🏽‍♀️"},"1F3FE":{"k":"female_fairy-1F3FE","n":"female_fairy","e":"🧚🏾‍♀️"},"1F3FF":{"k":"female_fairy-1F3FF","n":"female_fairy","e":"🧚🏿‍♀️"}}},{"n":["flag-om"],"e":"🇴🇲","c":4},{"n":["white_small_square"],"e":"▫️","c":7},{"n":["flag-pa"],"e":"🇵🇦","c":4},{"n":["mostly_sunny","sun_small_cloud"],"e":"🌤️","c":3},{"n":["male_fairy"],"e":"🧚‍♂️","c":1,"v":{"1F3FB":{"k":"male_fairy-1F3FB","n":"male_fairy","e":"🧚🏻‍♂️"},"1F3FC":{"k":"male_fairy-1F3FC","n":"male_fairy","e":"🧚🏼‍♂️"},"1F3FD":{"k":"male_fairy-1F3FD","n":"male_fairy","e":"🧚🏽‍♂️"},"1F3FE":{"k":"male_fairy-1F3FE","n":"male_fairy","e":"🧚🏾‍♂️"},"1F3FF":{"k":"male_fairy-1F3FF","n":"male_fairy","e":"🧚🏿‍♂️"}}},{"n":["barely_sunny","sun_behind_cloud"],"e":"🌥️","c":3},{"n":["white_medium_square"],"e":"◻️","c":7},{"n":["flag-pe"],"e":"🇵🇪","c":4},{"n":["vampire"],"e":"🧛","c":1,"v":{"1F3FB":{"k":"vampire-1F3FB","n":"vampire","e":"🧛🏻"},"1F3FC":{"k":"vampire-1F3FC","n":"vampire","e":"🧛🏼"},"1F3FD":{"k":"vampire-1F3FD","n":"vampire","e":"🧛🏽"},"1F3FE":{"k":"vampire-1F3FE","n":"vampire","e":"🧛🏾"},"1F3FF":{"k":"vampire-1F3FF","n":"vampire","e":"🧛🏿"}}},{"n":["female_vampire"],"e":"🧛‍♀️","c":1,"v":{"1F3FB":{"k":"female_vampire-1F3FB","n":"female_vampire","e":"🧛🏻‍♀️"},"1F3FC":{"k":"female_vampire-1F3FC","n":"female_vampire","e":"🧛🏼‍♀️"},"1F3FD":{"k":"female_vampire-1F3FD","n":"female_vampire","e":"🧛🏽‍♀️"},"1F3FE":{"k":"female_vampire-1F3FE","n":"female_vampire","e":"🧛🏾‍♀️"},"1F3FF":{"k":"female_vampire-1F3FF","n":"female_vampire","e":"🧛🏿‍♀️"}}},{"n":["partly_sunny_rain","sun_behind_rain_cloud"],"e":"🌦️","c":3},{"n":["flag-pf"],"e":"🇵🇫","c":4},{"n":["black_medium_square"],"e":"◼️","c":7},{"n":["white_medium_small_square"],"e":"◽","c":7},{"n":["rain_cloud"],"e":"🌧️","c":3},{"n":["flag-pg"],"e":"🇵🇬","c":4},{"n":["male_vampire"],"e":"🧛‍♂️","c":1,"v":{"1F3FB":{"k":"male_vampire-1F3FB","n":"male_vampire","e":"🧛🏻‍♂️"},"1F3FC":{"k":"male_vampire-1F3FC","n":"male_vampire","e":"🧛🏼‍♂️"},"1F3FD":{"k":"male_vampire-1F3FD","n":"male_vampire","e":"🧛🏽‍♂️"},"1F3FE":{"k":"male_vampire-1F3FE","n":"male_vampire","e":"🧛🏾‍♂️"},"1F3FF":{"k":"male_vampire-1F3FF","n":"male_vampire","e":"🧛🏿‍♂️"}}},{"n":["flag-ph"],"e":"🇵🇭","c":4},{"n":["merperson"],"e":"🧜","c":1,"v":{"1F3FB":{"k":"merperson-1F3FB","n":"merperson","e":"🧜🏻"},"1F3FC":{"k":"merperson-1F3FC","n":"merperson","e":"🧜🏼"},"1F3FD":{"k":"merperson-1F3FD","n":"merperson","e":"🧜🏽"},"1F3FE":{"k":"merperson-1F3FE","n":"merperson","e":"🧜🏾"},"1F3FF":{"k":"merperson-1F3FF","n":"merperson","e":"🧜🏿"}}},{"n":["black_medium_small_square"],"e":"◾","c":7},{"n":["snow_cloud"],"e":"🌨️","c":3},{"n":["lightning","lightning_cloud"],"e":"🌩️","c":3},{"n":["black_large_square"],"e":"⬛","c":7},{"n":["mermaid"],"e":"🧜‍♀️","c":1,"v":{"1F3FB":{"k":"mermaid-1F3FB","n":"mermaid","e":"🧜🏻‍♀️"},"1F3FC":{"k":"mermaid-1F3FC","n":"mermaid","e":"🧜🏼‍♀️"},"1F3FD":{"k":"mermaid-1F3FD","n":"mermaid","e":"🧜🏽‍♀️"},"1F3FE":{"k":"mermaid-1F3FE","n":"mermaid","e":"🧜🏾‍♀️"},"1F3FF":{"k":"mermaid-1F3FF","n":"mermaid","e":"🧜🏿‍♀️"}}},{"n":["flag-pk"],"e":"🇵🇰","c":4},{"n":["merman"],"e":"🧜‍♂️","c":1,"v":{"1F3FB":{"k":"merman-1F3FB","n":"merman","e":"🧜🏻‍♂️"},"1F3FC":{"k":"merman-1F3FC","n":"merman","e":"🧜🏼‍♂️"},"1F3FD":{"k":"merman-1F3FD","n":"merman","e":"🧜🏽‍♂️"},"1F3FE":{"k":"merman-1F3FE","n":"merman","e":"🧜🏾‍♂️"},"1F3FF":{"k":"merman-1F3FF","n":"merman","e":"🧜🏿‍♂️"}}},{"n":["white_large_square"],"e":"⬜","c":7},{"n":["tornado","tornado_cloud"],"e":"🌪️","c":3},{"n":["flag-pl"],"e":"🇵🇱","c":4},{"n":["elf"],"e":"🧝","c":1,"v":{"1F3FB":{"k":"elf-1F3FB","n":"elf","e":"🧝🏻"},"1F3FC":{"k":"elf-1F3FC","n":"elf","e":"🧝🏼"},"1F3FD":{"k":"elf-1F3FD","n":"elf","e":"🧝🏽"},"1F3FE":{"k":"elf-1F3FE","n":"elf","e":"🧝🏾"},"1F3FF":{"k":"elf-1F3FF","n":"elf","e":"🧝🏿"}}},{"n":["fog"],"e":"🌫️","c":3},{"n":["large_orange_diamond"],"e":"🔶","c":7},{"n":["flag-pm"],"e":"🇵🇲","c":4},{"n":["flag-pn"],"e":"🇵🇳","c":4},{"n":["wind_blowing_face"],"e":"🌬️","c":3},{"n":["female_elf"],"e":"🧝‍♀️","c":1,"v":{"1F3FB":{"k":"female_elf-1F3FB","n":"female_elf","e":"🧝🏻‍♀️"},"1F3FC":{"k":"female_elf-1F3FC","n":"female_elf","e":"🧝🏼‍♀️"},"1F3FD":{"k":"female_elf-1F3FD","n":"female_elf","e":"🧝🏽‍♀️"},"1F3FE":{"k":"female_elf-1F3FE","n":"female_elf","e":"🧝🏾‍♀️"},"1F3FF":{"k":"female_elf-1F3FF","n":"female_elf","e":"🧝🏿‍♀️"}}},{"n":["large_blue_diamond"],"e":"🔷","c":7},{"n":["male_elf"],"e":"🧝‍♂️","c":1,"v":{"1F3FB":{"k":"male_elf-1F3FB","n":"male_elf","e":"🧝🏻‍♂️"},"1F3FC":{"k":"male_elf-1F3FC","n":"male_elf","e":"🧝🏼‍♂️"},"1F3FD":{"k":"male_elf-1F3FD","n":"male_elf","e":"🧝🏽‍♂️"},"1F3FE":{"k":"male_elf-1F3FE","n":"male_elf","e":"🧝🏾‍♂️"},"1F3FF":{"k":"male_elf-1F3FF","n":"male_elf","e":"🧝🏿‍♂️"}}},{"n":["small_orange_diamond"],"e":"🔸","c":7},{"n":["flag-pr"],"e":"🇵🇷","c":4},{"n":["cyclone"],"e":"🌀","c":3},{"n":["rainbow"],"e":"🌈","c":3},{"n":["small_blue_diamond"],"e":"🔹","c":7},{"n":["genie"],"e":"🧞","c":1},{"n":["flag-ps"],"e":"🇵🇸","c":4},{"n":["small_red_triangle"],"e":"🔺","c":7},{"n":["closed_umbrella"],"e":"🌂","c":3},{"n":["female_genie"],"e":"🧞‍♀️","c":1},{"n":["flag-pt"],"e":"🇵🇹","c":4},{"n":["flag-pw"],"e":"🇵🇼","c":4},{"n":["small_red_triangle_down"],"e":"🔻","c":7},{"n":["umbrella"],"e":"☂️","c":3},{"n":["male_genie"],"e":"🧞‍♂️","c":1},{"n":["zombie"],"e":"🧟","c":1},{"n":["flag-py"],"e":"🇵🇾","c":4},{"n":["diamond_shape_with_a_dot_inside"],"e":"💠","c":7},{"n":["umbrella_with_rain_drops"],"e":"☔","c":3},{"n":["radio_button"],"e":"🔘","c":7},{"n":["female_zombie"],"e":"🧟‍♀️","c":1},{"n":["flag-qa"],"e":"🇶🇦","c":4},{"n":["umbrella_on_ground"],"e":"⛱️","c":3},{"n":["black_square_button"],"e":"🔲","c":7},{"n":["zap"],"e":"⚡","c":3},{"n":["male_zombie"],"e":"🧟‍♂️","c":1},{"n":["flag-re"],"e":"🇷🇪","c":4},{"n":["flag-ro"],"e":"🇷🇴","c":4},{"n":["snowflake"],"e":"❄️","c":3},{"n":["white_square_button"],"e":"🔳","c":7},{"n":["person_frowning"],"e":"🙍","c":1,"v":{"1F3FB":{"k":"person_frowning-1F3FB","n":"person_frowning","e":"🙍🏻"},"1F3FC":{"k":"person_frowning-1F3FC","n":"person_frowning","e":"🙍🏼"},"1F3FD":{"k":"person_frowning-1F3FD","n":"person_frowning","e":"🙍🏽"},"1F3FE":{"k":"person_frowning-1F3FE","n":"person_frowning","e":"🙍🏾"},"1F3FF":{"k":"person_frowning-1F3FF","n":"person_frowning","e":"🙍🏿"}}},{"n":["flag-rs"],"e":"🇷🇸","c":4},{"n":["man-frowning"],"e":"🙍‍♂️","c":1,"v":{"1F3FB":{"k":"man-frowning-1F3FB","n":"man-frowning","e":"🙍🏻‍♂️"},"1F3FC":{"k":"man-frowning-1F3FC","n":"man-frowning","e":"🙍🏼‍♂️"},"1F3FD":{"k":"man-frowning-1F3FD","n":"man-frowning","e":"🙍🏽‍♂️"},"1F3FE":{"k":"man-frowning-1F3FE","n":"man-frowning","e":"🙍🏾‍♂️"},"1F3FF":{"k":"man-frowning-1F3FF","n":"man-frowning","e":"🙍🏿‍♂️"}}},{"n":["white_circle"],"e":"⚪","c":7},{"n":["snowman"],"e":"☃️","c":3},{"n":["snowman_without_snow"],"e":"⛄","c":3},{"n":["ru","flag-ru"],"e":"🇷🇺","c":4},{"n":["black_circle"],"e":"⚫","c":7},{"n":["woman-frowning"],"e":"🙍‍♀️","c":1,"v":{"1F3FB":{"k":"woman-frowning-1F3FB","n":"woman-frowning","e":"🙍🏻‍♀️"},"1F3FC":{"k":"woman-frowning-1F3FC","n":"woman-frowning","e":"🙍🏼‍♀️"},"1F3FD":{"k":"woman-frowning-1F3FD","n":"woman-frowning","e":"🙍🏽‍♀️"},"1F3FE":{"k":"woman-frowning-1F3FE","n":"woman-frowning","e":"🙍🏾‍♀️"},"1F3FF":{"k":"woman-frowning-1F3FF","n":"woman-frowning","e":"🙍🏿‍♀️"}}},{"n":["flag-rw"],"e":"🇷🇼","c":4},{"n":["comet"],"e":"☄️","c":3},{"n":["person_with_pouting_face"],"e":"🙎","c":1,"v":{"1F3FB":{"k":"person_with_pouting_face-1F3FB","n":"person_with_pouting_face","e":"🙎🏻"},"1F3FC":{"k":"person_with_pouting_face-1F3FC","n":"person_with_pouting_face","e":"🙎🏼"},"1F3FD":{"k":"person_with_pouting_face-1F3FD","n":"person_with_pouting_face","e":"🙎🏽"},"1F3FE":{"k":"person_with_pouting_face-1F3FE","n":"person_with_pouting_face","e":"🙎🏾"},"1F3FF":{"k":"person_with_pouting_face-1F3FF","n":"person_with_pouting_face","e":"🙎🏿"}}},{"n":["red_circle"],"e":"🔴","c":7},{"n":["large_blue_circle"],"e":"🔵","c":7},{"n":["man-pouting"],"e":"🙎‍♂️","c":1,"v":{"1F3FB":{"k":"man-pouting-1F3FB","n":"man-pouting","e":"🙎🏻‍♂️"},"1F3FC":{"k":"man-pouting-1F3FC","n":"man-pouting","e":"🙎🏼‍♂️"},"1F3FD":{"k":"man-pouting-1F3FD","n":"man-pouting","e":"🙎🏽‍♂️"},"1F3FE":{"k":"man-pouting-1F3FE","n":"man-pouting","e":"🙎🏾‍♂️"},"1F3FF":{"k":"man-pouting-1F3FF","n":"man-pouting","e":"🙎🏿‍♂️"}}},{"n":["flag-sa"],"e":"🇸🇦","c":4},{"n":["fire"],"e":"🔥","c":3},{"n":["woman-pouting"],"e":"🙎‍♀️","c":1,"v":{"1F3FB":{"k":"woman-pouting-1F3FB","n":"woman-pouting","e":"🙎🏻‍♀️"},"1F3FC":{"k":"woman-pouting-1F3FC","n":"woman-pouting","e":"🙎🏼‍♀️"},"1F3FD":{"k":"woman-pouting-1F3FD","n":"woman-pouting","e":"🙎🏽‍♀️"},"1F3FE":{"k":"woman-pouting-1F3FE","n":"woman-pouting","e":"🙎🏾‍♀️"},"1F3FF":{"k":"woman-pouting-1F3FF","n":"woman-pouting","e":"🙎🏿‍♀️"}}},{"n":["flag-sb"],"e":"🇸🇧","c":4},{"n":["droplet"],"e":"💧","c":3},{"n":["no_good"],"e":"🙅","c":1,"v":{"1F3FB":{"k":"no_good-1F3FB","n":"no_good","e":"🙅🏻"},"1F3FC":{"k":"no_good-1F3FC","n":"no_good","e":"🙅🏼"},"1F3FD":{"k":"no_good-1F3FD","n":"no_good","e":"🙅🏽"},"1F3FE":{"k":"no_good-1F3FE","n":"no_good","e":"🙅🏾"},"1F3FF":{"k":"no_good-1F3FF","n":"no_good","e":"🙅🏿"}}},{"n":["flag-sc"],"e":"🇸🇨","c":4},{"n":["ocean"],"e":"🌊","c":3},{"n":["man-gesturing-no"],"e":"🙅‍♂️","c":1,"v":{"1F3FB":{"k":"man-gesturing-no-1F3FB","n":"man-gesturing-no","e":"🙅🏻‍♂️"},"1F3FC":{"k":"man-gesturing-no-1F3FC","n":"man-gesturing-no","e":"🙅🏼‍♂️"},"1F3FD":{"k":"man-gesturing-no-1F3FD","n":"man-gesturing-no","e":"🙅🏽‍♂️"},"1F3FE":{"k":"man-gesturing-no-1F3FE","n":"man-gesturing-no","e":"🙅🏾‍♂️"},"1F3FF":{"k":"man-gesturing-no-1F3FF","n":"man-gesturing-no","e":"🙅🏿‍♂️"}}},{"n":["flag-sd"],"e":"🇸🇩","c":4},{"n":["woman-gesturing-no"],"e":"🙅‍♀️","c":1,"v":{"1F3FB":{"k":"woman-gesturing-no-1F3FB","n":"woman-gesturing-no","e":"🙅🏻‍♀️"},"1F3FC":{"k":"woman-gesturing-no-1F3FC","n":"woman-gesturing-no","e":"🙅🏼‍♀️"},"1F3FD":{"k":"woman-gesturing-no-1F3FD","n":"woman-gesturing-no","e":"🙅🏽‍♀️"},"1F3FE":{"k":"woman-gesturing-no-1F3FE","n":"woman-gesturing-no","e":"🙅🏾‍♀️"},"1F3FF":{"k":"woman-gesturing-no-1F3FF","n":"woman-gesturing-no","e":"🙅🏿‍♀️"}}},{"n":["flag-se"],"e":"🇸🇪","c":4},{"n":["flag-sg"],"e":"🇸🇬","c":4},{"n":["ok_woman"],"e":"🙆","c":1,"v":{"1F3FB":{"k":"ok_woman-1F3FB","n":"ok_woman","e":"🙆🏻"},"1F3FC":{"k":"ok_woman-1F3FC","n":"ok_woman","e":"🙆🏼"},"1F3FD":{"k":"ok_woman-1F3FD","n":"ok_woman","e":"🙆🏽"},"1F3FE":{"k":"ok_woman-1F3FE","n":"ok_woman","e":"🙆🏾"},"1F3FF":{"k":"ok_woman-1F3FF","n":"ok_woman","e":"🙆🏿"}}},{"n":["flag-sh"],"e":"🇸🇭","c":4},{"n":["man-gesturing-ok"],"e":"🙆‍♂️","c":1,"v":{"1F3FB":{"k":"man-gesturing-ok-1F3FB","n":"man-gesturing-ok","e":"🙆🏻‍♂️"},"1F3FC":{"k":"man-gesturing-ok-1F3FC","n":"man-gesturing-ok","e":"🙆🏼‍♂️"},"1F3FD":{"k":"man-gesturing-ok-1F3FD","n":"man-gesturing-ok","e":"🙆🏽‍♂️"},"1F3FE":{"k":"man-gesturing-ok-1F3FE","n":"man-gesturing-ok","e":"🙆🏾‍♂️"},"1F3FF":{"k":"man-gesturing-ok-1F3FF","n":"man-gesturing-ok","e":"🙆🏿‍♂️"}}},{"n":["flag-si"],"e":"🇸🇮","c":4},{"n":["woman-gesturing-ok"],"e":"🙆‍♀️","c":1,"v":{"1F3FB":{"k":"woman-gesturing-ok-1F3FB","n":"woman-gesturing-ok","e":"🙆🏻‍♀️"},"1F3FC":{"k":"woman-gesturing-ok-1F3FC","n":"woman-gesturing-ok","e":"🙆🏼‍♀️"},"1F3FD":{"k":"woman-gesturing-ok-1F3FD","n":"woman-gesturing-ok","e":"🙆🏽‍♀️"},"1F3FE":{"k":"woman-gesturing-ok-1F3FE","n":"woman-gesturing-ok","e":"🙆🏾‍♀️"},"1F3FF":{"k":"woman-gesturing-ok-1F3FF","n":"woman-gesturing-ok","e":"🙆🏿‍♀️"}}},{"n":["information_desk_person"],"e":"💁","c":1,"v":{"1F3FB":{"k":"information_desk_person-1F3FB","n":"information_desk_person","e":"💁🏻"},"1F3FC":{"k":"information_desk_person-1F3FC","n":"information_desk_person","e":"💁🏼"},"1F3FD":{"k":"information_desk_person-1F3FD","n":"information_desk_person","e":"💁🏽"},"1F3FE":{"k":"information_desk_person-1F3FE","n":"information_desk_person","e":"💁🏾"},"1F3FF":{"k":"information_desk_person-1F3FF","n":"information_desk_person","e":"💁🏿"}}},{"n":["flag-sj"],"e":"🇸🇯","c":4},{"n":["man-tipping-hand"],"e":"💁‍♂️","c":1,"v":{"1F3FB":{"k":"man-tipping-hand-1F3FB","n":"man-tipping-hand","e":"💁🏻‍♂️"},"1F3FC":{"k":"man-tipping-hand-1F3FC","n":"man-tipping-hand","e":"💁🏼‍♂️"},"1F3FD":{"k":"man-tipping-hand-1F3FD","n":"man-tipping-hand","e":"💁🏽‍♂️"},"1F3FE":{"k":"man-tipping-hand-1F3FE","n":"man-tipping-hand","e":"💁🏾‍♂️"},"1F3FF":{"k":"man-tipping-hand-1F3FF","n":"man-tipping-hand","e":"💁🏿‍♂️"}}},{"n":["flag-sk"],"e":"🇸🇰","c":4},{"n":["flag-sl"],"e":"🇸🇱","c":4},{"n":["woman-tipping-hand"],"e":"💁‍♀️","c":1,"v":{"1F3FB":{"k":"woman-tipping-hand-1F3FB","n":"woman-tipping-hand","e":"💁🏻‍♀️"},"1F3FC":{"k":"woman-tipping-hand-1F3FC","n":"woman-tipping-hand","e":"💁🏼‍♀️"},"1F3FD":{"k":"woman-tipping-hand-1F3FD","n":"woman-tipping-hand","e":"💁🏽‍♀️"},"1F3FE":{"k":"woman-tipping-hand-1F3FE","n":"woman-tipping-hand","e":"💁🏾‍♀️"},"1F3FF":{"k":"woman-tipping-hand-1F3FF","n":"woman-tipping-hand","e":"💁🏿‍♀️"}}},{"n":["flag-sm"],"e":"🇸🇲","c":4},{"n":["raising_hand"],"e":"🙋","c":1,"v":{"1F3FB":{"k":"raising_hand-1F3FB","n":"raising_hand","e":"🙋🏻"},"1F3FC":{"k":"raising_hand-1F3FC","n":"raising_hand","e":"🙋🏼"},"1F3FD":{"k":"raising_hand-1F3FD","n":"raising_hand","e":"🙋🏽"},"1F3FE":{"k":"raising_hand-1F3FE","n":"raising_hand","e":"🙋🏾"},"1F3FF":{"k":"raising_hand-1F3FF","n":"raising_hand","e":"🙋🏿"}}},{"n":["flag-sn"],"e":"🇸🇳","c":4},{"n":["man-raising-hand"],"e":"🙋‍♂️","c":1,"v":{"1F3FB":{"k":"man-raising-hand-1F3FB","n":"man-raising-hand","e":"🙋🏻‍♂️"},"1F3FC":{"k":"man-raising-hand-1F3FC","n":"man-raising-hand","e":"🙋🏼‍♂️"},"1F3FD":{"k":"man-raising-hand-1F3FD","n":"man-raising-hand","e":"🙋🏽‍♂️"},"1F3FE":{"k":"man-raising-hand-1F3FE","n":"man-raising-hand","e":"🙋🏾‍♂️"},"1F3FF":{"k":"man-raising-hand-1F3FF","n":"man-raising-hand","e":"🙋🏿‍♂️"}}},{"n":["flag-so"],"e":"🇸🇴","c":4},{"n":["woman-raising-hand"],"e":"🙋‍♀️","c":1,"v":{"1F3FB":{"k":"woman-raising-hand-1F3FB","n":"woman-raising-hand","e":"🙋🏻‍♀️"},"1F3FC":{"k":"woman-raising-hand-1F3FC","n":"woman-raising-hand","e":"🙋🏼‍♀️"},"1F3FD":{"k":"woman-raising-hand-1F3FD","n":"woman-raising-hand","e":"🙋🏽‍♀️"},"1F3FE":{"k":"woman-raising-hand-1F3FE","n":"woman-raising-hand","e":"🙋🏾‍♀️"},"1F3FF":{"k":"woman-raising-hand-1F3FF","n":"woman-raising-hand","e":"🙋🏿‍♀️"}}},{"n":["flag-sr"],"e":"🇸🇷","c":4},{"n":["bow"],"e":"🙇","c":1,"v":{"1F3FB":{"k":"bow-1F3FB","n":"bow","e":"🙇🏻"},"1F3FC":{"k":"bow-1F3FC","n":"bow","e":"🙇🏼"},"1F3FD":{"k":"bow-1F3FD","n":"bow","e":"🙇🏽"},"1F3FE":{"k":"bow-1F3FE","n":"bow","e":"🙇🏾"},"1F3FF":{"k":"bow-1F3FF","n":"bow","e":"🙇🏿"}}},{"n":["man-bowing"],"e":"🙇‍♂️","c":1,"v":{"1F3FB":{"k":"man-bowing-1F3FB","n":"man-bowing","e":"🙇🏻‍♂️"},"1F3FC":{"k":"man-bowing-1F3FC","n":"man-bowing","e":"🙇🏼‍♂️"},"1F3FD":{"k":"man-bowing-1F3FD","n":"man-bowing","e":"🙇🏽‍♂️"},"1F3FE":{"k":"man-bowing-1F3FE","n":"man-bowing","e":"🙇🏾‍♂️"},"1F3FF":{"k":"man-bowing-1F3FF","n":"man-bowing","e":"🙇🏿‍♂️"}}},{"n":["flag-ss"],"e":"🇸🇸","c":4},{"n":["woman-bowing"],"e":"🙇‍♀️","c":1,"v":{"1F3FB":{"k":"woman-bowing-1F3FB","n":"woman-bowing","e":"🙇🏻‍♀️"},"1F3FC":{"k":"woman-bowing-1F3FC","n":"woman-bowing","e":"🙇🏼‍♀️"},"1F3FD":{"k":"woman-bowing-1F3FD","n":"woman-bowing","e":"🙇🏽‍♀️"},"1F3FE":{"k":"woman-bowing-1F3FE","n":"woman-bowing","e":"🙇🏾‍♀️"},"1F3FF":{"k":"woman-bowing-1F3FF","n":"woman-bowing","e":"🙇🏿‍♀️"}}},{"n":["flag-st"],"e":"🇸🇹","c":4},{"n":["face_palm"],"e":"🤦","c":1,"v":{"1F3FB":{"k":"face_palm-1F3FB","n":"face_palm","e":"🤦🏻"},"1F3FC":{"k":"face_palm-1F3FC","n":"face_palm","e":"🤦🏼"},"1F3FD":{"k":"face_palm-1F3FD","n":"face_palm","e":"🤦🏽"},"1F3FE":{"k":"face_palm-1F3FE","n":"face_palm","e":"🤦🏾"},"1F3FF":{"k":"face_palm-1F3FF","n":"face_palm","e":"🤦🏿"}}},{"n":["flag-sv"],"e":"🇸🇻","c":4},{"n":["man-facepalming"],"e":"🤦‍♂️","c":1,"v":{"1F3FB":{"k":"man-facepalming-1F3FB","n":"man-facepalming","e":"🤦🏻‍♂️"},"1F3FC":{"k":"man-facepalming-1F3FC","n":"man-facepalming","e":"🤦🏼‍♂️"},"1F3FD":{"k":"man-facepalming-1F3FD","n":"man-facepalming","e":"🤦🏽‍♂️"},"1F3FE":{"k":"man-facepalming-1F3FE","n":"man-facepalming","e":"🤦🏾‍♂️"},"1F3FF":{"k":"man-facepalming-1F3FF","n":"man-facepalming","e":"🤦🏿‍♂️"}}},{"n":["flag-sx"],"e":"🇸🇽","c":4},{"n":["flag-sy"],"e":"🇸🇾","c":4},{"n":["woman-facepalming"],"e":"🤦‍♀️","c":1,"v":{"1F3FB":{"k":"woman-facepalming-1F3FB","n":"woman-facepalming","e":"🤦🏻‍♀️"},"1F3FC":{"k":"woman-facepalming-1F3FC","n":"woman-facepalming","e":"🤦🏼‍♀️"},"1F3FD":{"k":"woman-facepalming-1F3FD","n":"woman-facepalming","e":"🤦🏽‍♀️"},"1F3FE":{"k":"woman-facepalming-1F3FE","n":"woman-facepalming","e":"🤦🏾‍♀️"},"1F3FF":{"k":"woman-facepalming-1F3FF","n":"woman-facepalming","e":"🤦🏿‍♀️"}}},{"n":["shrug"],"e":"🤷","c":1,"v":{"1F3FB":{"k":"shrug-1F3FB","n":"shrug","e":"🤷🏻"},"1F3FC":{"k":"shrug-1F3FC","n":"shrug","e":"🤷🏼"},"1F3FD":{"k":"shrug-1F3FD","n":"shrug","e":"🤷🏽"},"1F3FE":{"k":"shrug-1F3FE","n":"shrug","e":"🤷🏾"},"1F3FF":{"k":"shrug-1F3FF","n":"shrug","e":"🤷🏿"}}},{"n":["flag-sz"],"e":"🇸🇿","c":4},{"n":["flag-ta"],"e":"🇹🇦","c":4},{"n":["man-shrugging"],"e":"🤷‍♂️","c":1,"v":{"1F3FB":{"k":"man-shrugging-1F3FB","n":"man-shrugging","e":"🤷🏻‍♂️"},"1F3FC":{"k":"man-shrugging-1F3FC","n":"man-shrugging","e":"🤷🏼‍♂️"},"1F3FD":{"k":"man-shrugging-1F3FD","n":"man-shrugging","e":"🤷🏽‍♂️"},"1F3FE":{"k":"man-shrugging-1F3FE","n":"man-shrugging","e":"🤷🏾‍♂️"},"1F3FF":{"k":"man-shrugging-1F3FF","n":"man-shrugging","e":"🤷🏿‍♂️"}}},{"n":["woman-shrugging"],"e":"🤷‍♀️","c":1,"v":{"1F3FB":{"k":"woman-shrugging-1F3FB","n":"woman-shrugging","e":"🤷🏻‍♀️"},"1F3FC":{"k":"woman-shrugging-1F3FC","n":"woman-shrugging","e":"🤷🏼‍♀️"},"1F3FD":{"k":"woman-shrugging-1F3FD","n":"woman-shrugging","e":"🤷🏽‍♀️"},"1F3FE":{"k":"woman-shrugging-1F3FE","n":"woman-shrugging","e":"🤷🏾‍♀️"},"1F3FF":{"k":"woman-shrugging-1F3FF","n":"woman-shrugging","e":"🤷🏿‍♀️"}}},{"n":["flag-tc"],"e":"🇹🇨","c":4},{"n":["massage"],"e":"💆","c":1,"v":{"1F3FB":{"k":"massage-1F3FB","n":"massage","e":"💆🏻"},"1F3FC":{"k":"massage-1F3FC","n":"massage","e":"💆🏼"},"1F3FD":{"k":"massage-1F3FD","n":"massage","e":"💆🏽"},"1F3FE":{"k":"massage-1F3FE","n":"massage","e":"💆🏾"},"1F3FF":{"k":"massage-1F3FF","n":"massage","e":"💆🏿"}}},{"n":["flag-td"],"e":"🇹🇩","c":4},{"n":["man-getting-massage"],"e":"💆‍♂️","c":1,"v":{"1F3FB":{"k":"man-getting-massage-1F3FB","n":"man-getting-massage","e":"💆🏻‍♂️"},"1F3FC":{"k":"man-getting-massage-1F3FC","n":"man-getting-massage","e":"💆🏼‍♂️"},"1F3FD":{"k":"man-getting-massage-1F3FD","n":"man-getting-massage","e":"💆🏽‍♂️"},"1F3FE":{"k":"man-getting-massage-1F3FE","n":"man-getting-massage","e":"💆🏾‍♂️"},"1F3FF":{"k":"man-getting-massage-1F3FF","n":"man-getting-massage","e":"💆🏿‍♂️"}}},{"n":["flag-tf"],"e":"🇹🇫","c":4},{"n":["woman-getting-massage"],"e":"💆‍♀️","c":1,"v":{"1F3FB":{"k":"woman-getting-massage-1F3FB","n":"woman-getting-massage","e":"💆🏻‍♀️"},"1F3FC":{"k":"woman-getting-massage-1F3FC","n":"woman-getting-massage","e":"💆🏼‍♀️"},"1F3FD":{"k":"woman-getting-massage-1F3FD","n":"woman-getting-massage","e":"💆🏽‍♀️"},"1F3FE":{"k":"woman-getting-massage-1F3FE","n":"woman-getting-massage","e":"💆🏾‍♀️"},"1F3FF":{"k":"woman-getting-massage-1F3FF","n":"woman-getting-massage","e":"💆🏿‍♀️"}}},{"n":["flag-tg"],"e":"🇹🇬","c":4},{"n":["haircut"],"e":"💇","c":1,"v":{"1F3FB":{"k":"haircut-1F3FB","n":"haircut","e":"💇🏻"},"1F3FC":{"k":"haircut-1F3FC","n":"haircut","e":"💇🏼"},"1F3FD":{"k":"haircut-1F3FD","n":"haircut","e":"💇🏽"},"1F3FE":{"k":"haircut-1F3FE","n":"haircut","e":"💇🏾"},"1F3FF":{"k":"haircut-1F3FF","n":"haircut","e":"💇🏿"}}},{"n":["flag-th"],"e":"🇹🇭","c":4},{"n":["man-getting-haircut"],"e":"💇‍♂️","c":1,"v":{"1F3FB":{"k":"man-getting-haircut-1F3FB","n":"man-getting-haircut","e":"💇🏻‍♂️"},"1F3FC":{"k":"man-getting-haircut-1F3FC","n":"man-getting-haircut","e":"💇🏼‍♂️"},"1F3FD":{"k":"man-getting-haircut-1F3FD","n":"man-getting-haircut","e":"💇🏽‍♂️"},"1F3FE":{"k":"man-getting-haircut-1F3FE","n":"man-getting-haircut","e":"💇🏾‍♂️"},"1F3FF":{"k":"man-getting-haircut-1F3FF","n":"man-getting-haircut","e":"💇🏿‍♂️"}}},{"n":["flag-tj"],"e":"🇹🇯","c":4},{"n":["flag-tk"],"e":"🇹🇰","c":4},{"n":["woman-getting-haircut"],"e":"💇‍♀️","c":1,"v":{"1F3FB":{"k":"woman-getting-haircut-1F3FB","n":"woman-getting-haircut","e":"💇🏻‍♀️"},"1F3FC":{"k":"woman-getting-haircut-1F3FC","n":"woman-getting-haircut","e":"💇🏼‍♀️"},"1F3FD":{"k":"woman-getting-haircut-1F3FD","n":"woman-getting-haircut","e":"💇🏽‍♀️"},"1F3FE":{"k":"woman-getting-haircut-1F3FE","n":"woman-getting-haircut","e":"💇🏾‍♀️"},"1F3FF":{"k":"woman-getting-haircut-1F3FF","n":"woman-getting-haircut","e":"💇🏿‍♀️"}}},{"n":["walking"],"e":"🚶","c":1,"v":{"1F3FB":{"k":"walking-1F3FB","n":"walking","e":"🚶🏻"},"1F3FC":{"k":"walking-1F3FC","n":"walking","e":"🚶🏼"},"1F3FD":{"k":"walking-1F3FD","n":"walking","e":"🚶🏽"},"1F3FE":{"k":"walking-1F3FE","n":"walking","e":"🚶🏾"},"1F3FF":{"k":"walking-1F3FF","n":"walking","e":"🚶🏿"}}},{"n":["flag-tl"],"e":"🇹🇱","c":4},{"n":["man-walking"],"e":"🚶‍♂️","c":1,"v":{"1F3FB":{"k":"man-walking-1F3FB","n":"man-walking","e":"🚶🏻‍♂️"},"1F3FC":{"k":"man-walking-1F3FC","n":"man-walking","e":"🚶🏼‍♂️"},"1F3FD":{"k":"man-walking-1F3FD","n":"man-walking","e":"🚶🏽‍♂️"},"1F3FE":{"k":"man-walking-1F3FE","n":"man-walking","e":"🚶🏾‍♂️"},"1F3FF":{"k":"man-walking-1F3FF","n":"man-walking","e":"🚶🏿‍♂️"}}},{"n":["flag-tm"],"e":"🇹🇲","c":4},{"n":["woman-walking"],"e":"🚶‍♀️","c":1,"v":{"1F3FB":{"k":"woman-walking-1F3FB","n":"woman-walking","e":"🚶🏻‍♀️"},"1F3FC":{"k":"woman-walking-1F3FC","n":"woman-walking","e":"🚶🏼‍♀️"},"1F3FD":{"k":"woman-walking-1F3FD","n":"woman-walking","e":"🚶🏽‍♀️"},"1F3FE":{"k":"woman-walking-1F3FE","n":"woman-walking","e":"🚶🏾‍♀️"},"1F3FF":{"k":"woman-walking-1F3FF","n":"woman-walking","e":"🚶🏿‍♀️"}}},{"n":["flag-tn"],"e":"🇹🇳","c":4},{"n":["runner","running"],"e":"🏃","c":1,"v":{"1F3FB":{"k":"runner-1F3FB","n":"runner","e":"🏃🏻"},"1F3FC":{"k":"runner-1F3FC","n":"runner","e":"🏃🏼"},"1F3FD":{"k":"runner-1F3FD","n":"runner","e":"🏃🏽"},"1F3FE":{"k":"runner-1F3FE","n":"runner","e":"🏃🏾"},"1F3FF":{"k":"runner-1F3FF","n":"runner","e":"🏃🏿"}}},{"n":["flag-to"],"e":"🇹🇴","c":4},{"n":["man-running"],"e":"🏃‍♂️","c":1,"v":{"1F3FB":{"k":"man-running-1F3FB","n":"man-running","e":"🏃🏻‍♂️"},"1F3FC":{"k":"man-running-1F3FC","n":"man-running","e":"🏃🏼‍♂️"},"1F3FD":{"k":"man-running-1F3FD","n":"man-running","e":"🏃🏽‍♂️"},"1F3FE":{"k":"man-running-1F3FE","n":"man-running","e":"🏃🏾‍♂️"},"1F3FF":{"k":"man-running-1F3FF","n":"man-running","e":"🏃🏿‍♂️"}}},{"n":["flag-tr"],"e":"🇹🇷","c":4},{"n":["flag-tt"],"e":"🇹🇹","c":4},{"n":["woman-running"],"e":"🏃‍♀️","c":1,"v":{"1F3FB":{"k":"woman-running-1F3FB","n":"woman-running","e":"🏃🏻‍♀️"},"1F3FC":{"k":"woman-running-1F3FC","n":"woman-running","e":"🏃🏼‍♀️"},"1F3FD":{"k":"woman-running-1F3FD","n":"woman-running","e":"🏃🏽‍♀️"},"1F3FE":{"k":"woman-running-1F3FE","n":"woman-running","e":"🏃🏾‍♀️"},"1F3FF":{"k":"woman-running-1F3FF","n":"woman-running","e":"🏃🏿‍♀️"}}},{"n":["flag-tv"],"e":"🇹🇻","c":4},{"n":["dancer"],"e":"💃","c":1,"v":{"1F3FB":{"k":"dancer-1F3FB","n":"dancer","e":"💃🏻"},"1F3FC":{"k":"dancer-1F3FC","n":"dancer","e":"💃🏼"},"1F3FD":{"k":"dancer-1F3FD","n":"dancer","e":"💃🏽"},"1F3FE":{"k":"dancer-1F3FE","n":"dancer","e":"💃🏾"},"1F3FF":{"k":"dancer-1F3FF","n":"dancer","e":"💃🏿"}}},{"n":["flag-tw"],"e":"🇹🇼","c":4},{"n":["man_dancing"],"e":"🕺","c":1,"v":{"1F3FB":{"k":"man_dancing-1F3FB","n":"man_dancing","e":"🕺🏻"},"1F3FC":{"k":"man_dancing-1F3FC","n":"man_dancing","e":"🕺🏼"},"1F3FD":{"k":"man_dancing-1F3FD","n":"man_dancing","e":"🕺🏽"},"1F3FE":{"k":"man_dancing-1F3FE","n":"man_dancing","e":"🕺🏾"},"1F3FF":{"k":"man_dancing-1F3FF","n":"man_dancing","e":"🕺🏿"}}},{"n":["dancers"],"e":"👯","c":1},{"n":["flag-tz"],"e":"🇹🇿","c":4},{"n":["flag-ua"],"e":"🇺🇦","c":4},{"n":["man-with-bunny-ears-partying"],"e":"👯‍♂️","c":1},{"n":["woman-with-bunny-ears-partying"],"e":"👯‍♀️","c":1},{"n":["flag-ug"],"e":"🇺🇬","c":4},{"n":["flag-um"],"e":"🇺🇲","c":4},{"n":["person_in_steamy_room"],"e":"🧖","c":1,"v":{"1F3FB":{"k":"person_in_steamy_room-1F3FB","n":"person_in_steamy_room","e":"🧖🏻"},"1F3FC":{"k":"person_in_steamy_room-1F3FC","n":"person_in_steamy_room","e":"🧖🏼"},"1F3FD":{"k":"person_in_steamy_room-1F3FD","n":"person_in_steamy_room","e":"🧖🏽"},"1F3FE":{"k":"person_in_steamy_room-1F3FE","n":"person_in_steamy_room","e":"🧖🏾"},"1F3FF":{"k":"person_in_steamy_room-1F3FF","n":"person_in_steamy_room","e":"🧖🏿"}}},{"n":["woman_in_steamy_room"],"e":"🧖‍♀️","c":1,"v":{"1F3FB":{"k":"woman_in_steamy_room-1F3FB","n":"woman_in_steamy_room","e":"🧖🏻‍♀️"},"1F3FC":{"k":"woman_in_steamy_room-1F3FC","n":"woman_in_steamy_room","e":"🧖🏼‍♀️"},"1F3FD":{"k":"woman_in_steamy_room-1F3FD","n":"woman_in_steamy_room","e":"🧖🏽‍♀️"},"1F3FE":{"k":"woman_in_steamy_room-1F3FE","n":"woman_in_steamy_room","e":"🧖🏾‍♀️"},"1F3FF":{"k":"woman_in_steamy_room-1F3FF","n":"woman_in_steamy_room","e":"🧖🏿‍♀️"}}},{"n":["flag-un"],"e":"🇺🇳","c":4},{"n":["us","flag-us"],"e":"🇺🇸","c":4},{"n":["man_in_steamy_room"],"e":"🧖‍♂️","c":1,"v":{"1F3FB":{"k":"man_in_steamy_room-1F3FB","n":"man_in_steamy_room","e":"🧖🏻‍♂️"},"1F3FC":{"k":"man_in_steamy_room-1F3FC","n":"man_in_steamy_room","e":"🧖🏼‍♂️"},"1F3FD":{"k":"man_in_steamy_room-1F3FD","n":"man_in_steamy_room","e":"🧖🏽‍♂️"},"1F3FE":{"k":"man_in_steamy_room-1F3FE","n":"man_in_steamy_room","e":"🧖🏾‍♂️"},"1F3FF":{"k":"man_in_steamy_room-1F3FF","n":"man_in_steamy_room","e":"🧖🏿‍♂️"}}},{"n":["person_climbing"],"e":"🧗","c":1,"v":{"1F3FB":{"k":"person_climbing-1F3FB","n":"person_climbing","e":"🧗🏻"},"1F3FC":{"k":"person_climbing-1F3FC","n":"person_climbing","e":"🧗🏼"},"1F3FD":{"k":"person_climbing-1F3FD","n":"person_climbing","e":"🧗🏽"},"1F3FE":{"k":"person_climbing-1F3FE","n":"person_climbing","e":"🧗🏾"},"1F3FF":{"k":"person_climbing-1F3FF","n":"person_climbing","e":"🧗🏿"}}},{"n":["flag-uy"],"e":"🇺🇾","c":4},{"n":["woman_climbing"],"e":"🧗‍♀️","c":1,"v":{"1F3FB":{"k":"woman_climbing-1F3FB","n":"woman_climbing","e":"🧗🏻‍♀️"},"1F3FC":{"k":"woman_climbing-1F3FC","n":"woman_climbing","e":"🧗🏼‍♀️"},"1F3FD":{"k":"woman_climbing-1F3FD","n":"woman_climbing","e":"🧗🏽‍♀️"},"1F3FE":{"k":"woman_climbing-1F3FE","n":"woman_climbing","e":"🧗🏾‍♀️"},"1F3FF":{"k":"woman_climbing-1F3FF","n":"woman_climbing","e":"🧗🏿‍♀️"}}},{"n":["flag-uz"],"e":"🇺🇿","c":4},{"n":["man_climbing"],"e":"🧗‍♂️","c":1,"v":{"1F3FB":{"k":"man_climbing-1F3FB","n":"man_climbing","e":"🧗🏻‍♂️"},"1F3FC":{"k":"man_climbing-1F3FC","n":"man_climbing","e":"🧗🏼‍♂️"},"1F3FD":{"k":"man_climbing-1F3FD","n":"man_climbing","e":"🧗🏽‍♂️"},"1F3FE":{"k":"man_climbing-1F3FE","n":"man_climbing","e":"🧗🏾‍♂️"},"1F3FF":{"k":"man_climbing-1F3FF","n":"man_climbing","e":"🧗🏿‍♂️"}}},{"n":["flag-va"],"e":"🇻🇦","c":4},{"n":["person_in_lotus_position"],"e":"🧘","c":1,"v":{"1F3FB":{"k":"person_in_lotus_position-1F3FB","n":"person_in_lotus_position","e":"🧘🏻"},"1F3FC":{"k":"person_in_lotus_position-1F3FC","n":"person_in_lotus_position","e":"🧘🏼"},"1F3FD":{"k":"person_in_lotus_position-1F3FD","n":"person_in_lotus_position","e":"🧘🏽"},"1F3FE":{"k":"person_in_lotus_position-1F3FE","n":"person_in_lotus_position","e":"🧘🏾"},"1F3FF":{"k":"person_in_lotus_position-1F3FF","n":"person_in_lotus_position","e":"🧘🏿"}}},{"n":["flag-vc"],"e":"🇻🇨","c":4},{"n":["flag-ve"],"e":"🇻🇪","c":4},{"n":["woman_in_lotus_position"],"e":"🧘‍♀️","c":1,"v":{"1F3FB":{"k":"woman_in_lotus_position-1F3FB","n":"woman_in_lotus_position","e":"🧘🏻‍♀️"},"1F3FC":{"k":"woman_in_lotus_position-1F3FC","n":"woman_in_lotus_position","e":"🧘🏼‍♀️"},"1F3FD":{"k":"woman_in_lotus_position-1F3FD","n":"woman_in_lotus_position","e":"🧘🏽‍♀️"},"1F3FE":{"k":"woman_in_lotus_position-1F3FE","n":"woman_in_lotus_position","e":"🧘🏾‍♀️"},"1F3FF":{"k":"woman_in_lotus_position-1F3FF","n":"woman_in_lotus_position","e":"🧘🏿‍♀️"}}},{"n":["man_in_lotus_position"],"e":"🧘‍♂️","c":1,"v":{"1F3FB":{"k":"man_in_lotus_position-1F3FB","n":"man_in_lotus_position","e":"🧘🏻‍♂️"},"1F3FC":{"k":"man_in_lotus_position-1F3FC","n":"man_in_lotus_position","e":"🧘🏼‍♂️"},"1F3FD":{"k":"man_in_lotus_position-1F3FD","n":"man_in_lotus_position","e":"🧘🏽‍♂️"},"1F3FE":{"k":"man_in_lotus_position-1F3FE","n":"man_in_lotus_position","e":"🧘🏾‍♂️"},"1F3FF":{"k":"man_in_lotus_position-1F3FF","n":"man_in_lotus_position","e":"🧘🏿‍♂️"}}},{"n":["flag-vg"],"e":"🇻🇬","c":4},{"n":["flag-vi"],"e":"🇻🇮","c":4},{"n":["bath"],"e":"🛀","c":1,"v":{"1F3FB":{"k":"bath-1F3FB","n":"bath","e":"🛀🏻"},"1F3FC":{"k":"bath-1F3FC","n":"bath","e":"🛀🏼"},"1F3FD":{"k":"bath-1F3FD","n":"bath","e":"🛀🏽"},"1F3FE":{"k":"bath-1F3FE","n":"bath","e":"🛀🏾"},"1F3FF":{"k":"bath-1F3FF","n":"bath","e":"🛀🏿"}}},{"n":["sleeping_accommodation"],"e":"🛌","c":1,"v":{"1F3FB":{"k":"sleeping_accommodation-1F3FB","n":"sleeping_accommodation","e":"🛌🏻"},"1F3FC":{"k":"sleeping_accommodation-1F3FC","n":"sleeping_accommodation","e":"🛌🏼"},"1F3FD":{"k":"sleeping_accommodation-1F3FD","n":"sleeping_accommodation","e":"🛌🏽"},"1F3FE":{"k":"sleeping_accommodation-1F3FE","n":"sleeping_accommodation","e":"🛌🏾"},"1F3FF":{"k":"sleeping_accommodation-1F3FF","n":"sleeping_accommodation","e":"🛌🏿"}}},{"n":["flag-vn"],"e":"🇻🇳","c":4},{"n":["man_in_business_suit_levitating"],"e":"🕴️","c":1,"v":{"1F3FB":{"k":"man_in_business_suit_levitating-1F3FB","n":"man_in_business_suit_levitating","e":"🕴🏻"},"1F3FC":{"k":"man_in_business_suit_levitating-1F3FC","n":"man_in_business_suit_levitating","e":"🕴🏼"},"1F3FD":{"k":"man_in_business_suit_levitating-1F3FD","n":"man_in_business_suit_levitating","e":"🕴🏽"},"1F3FE":{"k":"man_in_business_suit_levitating-1F3FE","n":"man_in_business_suit_levitating","e":"🕴🏾"},"1F3FF":{"k":"man_in_business_suit_levitating-1F3FF","n":"man_in_business_suit_levitating","e":"🕴🏿"}}},{"n":["flag-vu"],"e":"🇻🇺","c":4},{"n":["flag-wf"],"e":"🇼🇫","c":4},{"n":["speaking_head_in_silhouette"],"e":"🗣️","c":1},{"n":["bust_in_silhouette"],"e":"👤","c":1},{"n":["flag-ws"],"e":"🇼🇸","c":4},{"n":["busts_in_silhouette"],"e":"👥","c":1},{"n":["flag-xk"],"e":"🇽🇰","c":4},{"n":["fencer"],"e":"🤺","c":1},{"n":["flag-ye"],"e":"🇾🇪","c":4},{"n":["flag-yt"],"e":"🇾🇹","c":4},{"n":["horse_racing"],"e":"🏇","c":1,"v":{"1F3FB":{"k":"horse_racing-1F3FB","n":"horse_racing","e":"🏇🏻"},"1F3FC":{"k":"horse_racing-1F3FC","n":"horse_racing","e":"🏇🏼"},"1F3FD":{"k":"horse_racing-1F3FD","n":"horse_racing","e":"🏇🏽"},"1F3FE":{"k":"horse_racing-1F3FE","n":"horse_racing","e":"🏇🏾"},"1F3FF":{"k":"horse_racing-1F3FF","n":"horse_racing","e":"🏇🏿"}}},{"n":["flag-za"],"e":"🇿🇦","c":4},{"n":["skier"],"e":"⛷️","c":1},{"n":["flag-zm"],"e":"🇿🇲","c":4},{"n":["snowboarder"],"e":"🏂","c":1,"v":{"1F3FB":{"k":"snowboarder-1F3FB","n":"snowboarder","e":"🏂🏻"},"1F3FC":{"k":"snowboarder-1F3FC","n":"snowboarder","e":"🏂🏼"},"1F3FD":{"k":"snowboarder-1F3FD","n":"snowboarder","e":"🏂🏽"},"1F3FE":{"k":"snowboarder-1F3FE","n":"snowboarder","e":"🏂🏾"},"1F3FF":{"k":"snowboarder-1F3FF","n":"snowboarder","e":"🏂🏿"}}},{"n":["golfer"],"e":"🏌️","c":1,"v":{"1F3FB":{"k":"golfer-1F3FB","n":"golfer","e":"🏌🏻"},"1F3FC":{"k":"golfer-1F3FC","n":"golfer","e":"🏌🏼"},"1F3FD":{"k":"golfer-1F3FD","n":"golfer","e":"🏌🏽"},"1F3FE":{"k":"golfer-1F3FE","n":"golfer","e":"🏌🏾"},"1F3FF":{"k":"golfer-1F3FF","n":"golfer","e":"🏌🏿"}}},{"n":["flag-zw"],"e":"🇿🇼","c":4},{"n":["man-golfing"],"e":"🏌️‍♂️","c":1,"v":{"1F3FB":{"k":"man-golfing-1F3FB","n":"man-golfing","e":"🏌🏻‍♂️"},"1F3FC":{"k":"man-golfing-1F3FC","n":"man-golfing","e":"🏌🏼‍♂️"},"1F3FD":{"k":"man-golfing-1F3FD","n":"man-golfing","e":"🏌🏽‍♂️"},"1F3FE":{"k":"man-golfing-1F3FE","n":"man-golfing","e":"🏌🏾‍♂️"},"1F3FF":{"k":"man-golfing-1F3FF","n":"man-golfing","e":"🏌🏿‍♂️"}}},{"n":["flag-england"],"e":"🏴󠁧󠁢󠁥󠁮󠁧󠁿","c":4},{"n":["woman-golfing"],"e":"🏌️‍♀️","c":1,"v":{"1F3FB":{"k":"woman-golfing-1F3FB","n":"woman-golfing","e":"🏌🏻‍♀️"},"1F3FC":{"k":"woman-golfing-1F3FC","n":"woman-golfing","e":"🏌🏼‍♀️"},"1F3FD":{"k":"woman-golfing-1F3FD","n":"woman-golfing","e":"🏌🏽‍♀️"},"1F3FE":{"k":"woman-golfing-1F3FE","n":"woman-golfing","e":"🏌🏾‍♀️"},"1F3FF":{"k":"woman-golfing-1F3FF","n":"woman-golfing","e":"🏌🏿‍♀️"}}},{"n":["flag-scotland"],"e":"🏴󠁧󠁢󠁳󠁣󠁴󠁿","c":4},{"n":["flag-wales"],"e":"🏴󠁧󠁢󠁷󠁬󠁳󠁿","c":4},{"n":["surfer"],"e":"🏄","c":1,"v":{"1F3FB":{"k":"surfer-1F3FB","n":"surfer","e":"🏄🏻"},"1F3FC":{"k":"surfer-1F3FC","n":"surfer","e":"🏄🏼"},"1F3FD":{"k":"surfer-1F3FD","n":"surfer","e":"🏄🏽"},"1F3FE":{"k":"surfer-1F3FE","n":"surfer","e":"🏄🏾"},"1F3FF":{"k":"surfer-1F3FF","n":"surfer","e":"🏄🏿"}}},{"n":["man-surfing"],"e":"🏄‍♂️","c":1,"v":{"1F3FB":{"k":"man-surfing-1F3FB","n":"man-surfing","e":"🏄🏻‍♂️"},"1F3FC":{"k":"man-surfing-1F3FC","n":"man-surfing","e":"🏄🏼‍♂️"},"1F3FD":{"k":"man-surfing-1F3FD","n":"man-surfing","e":"🏄🏽‍♂️"},"1F3FE":{"k":"man-surfing-1F3FE","n":"man-surfing","e":"🏄🏾‍♂️"},"1F3FF":{"k":"man-surfing-1F3FF","n":"man-surfing","e":"🏄🏿‍♂️"}}},{"n":["woman-surfing"],"e":"🏄‍♀️","c":1,"v":{"1F3FB":{"k":"woman-surfing-1F3FB","n":"woman-surfing","e":"🏄🏻‍♀️"},"1F3FC":{"k":"woman-surfing-1F3FC","n":"woman-surfing","e":"🏄🏼‍♀️"},"1F3FD":{"k":"woman-surfing-1F3FD","n":"woman-surfing","e":"🏄🏽‍♀️"},"1F3FE":{"k":"woman-surfing-1F3FE","n":"woman-surfing","e":"🏄🏾‍♀️"},"1F3FF":{"k":"woman-surfing-1F3FF","n":"woman-surfing","e":"🏄🏿‍♀️"}}},{"n":["rowboat"],"e":"🚣","c":1,"v":{"1F3FB":{"k":"rowboat-1F3FB","n":"rowboat","e":"🚣🏻"},"1F3FC":{"k":"rowboat-1F3FC","n":"rowboat","e":"🚣🏼"},"1F3FD":{"k":"rowboat-1F3FD","n":"rowboat","e":"🚣🏽"},"1F3FE":{"k":"rowboat-1F3FE","n":"rowboat","e":"🚣🏾"},"1F3FF":{"k":"rowboat-1F3FF","n":"rowboat","e":"🚣🏿"}}},{"n":["man-rowing-boat"],"e":"🚣‍♂️","c":1,"v":{"1F3FB":{"k":"man-rowing-boat-1F3FB","n":"man-rowing-boat","e":"🚣🏻‍♂️"},"1F3FC":{"k":"man-rowing-boat-1F3FC","n":"man-rowing-boat","e":"🚣🏼‍♂️"},"1F3FD":{"k":"man-rowing-boat-1F3FD","n":"man-rowing-boat","e":"🚣🏽‍♂️"},"1F3FE":{"k":"man-rowing-boat-1F3FE","n":"man-rowing-boat","e":"🚣🏾‍♂️"},"1F3FF":{"k":"man-rowing-boat-1F3FF","n":"man-rowing-boat","e":"🚣🏿‍♂️"}}},{"n":["woman-rowing-boat"],"e":"🚣‍♀️","c":1,"v":{"1F3FB":{"k":"woman-rowing-boat-1F3FB","n":"woman-rowing-boat","e":"🚣🏻‍♀️"},"1F3FC":{"k":"woman-rowing-boat-1F3FC","n":"woman-rowing-boat","e":"🚣🏼‍♀️"},"1F3FD":{"k":"woman-rowing-boat-1F3FD","n":"woman-rowing-boat","e":"🚣🏽‍♀️"},"1F3FE":{"k":"woman-rowing-boat-1F3FE","n":"woman-rowing-boat","e":"🚣🏾‍♀️"},"1F3FF":{"k":"woman-rowing-boat-1F3FF","n":"woman-rowing-boat","e":"🚣🏿‍♀️"}}},{"n":["swimmer"],"e":"🏊","c":1,"v":{"1F3FB":{"k":"swimmer-1F3FB","n":"swimmer","e":"🏊🏻"},"1F3FC":{"k":"swimmer-1F3FC","n":"swimmer","e":"🏊🏼"},"1F3FD":{"k":"swimmer-1F3FD","n":"swimmer","e":"🏊🏽"},"1F3FE":{"k":"swimmer-1F3FE","n":"swimmer","e":"🏊🏾"},"1F3FF":{"k":"swimmer-1F3FF","n":"swimmer","e":"🏊🏿"}}},{"n":["man-swimming"],"e":"🏊‍♂️","c":1,"v":{"1F3FB":{"k":"man-swimming-1F3FB","n":"man-swimming","e":"🏊🏻‍♂️"},"1F3FC":{"k":"man-swimming-1F3FC","n":"man-swimming","e":"🏊🏼‍♂️"},"1F3FD":{"k":"man-swimming-1F3FD","n":"man-swimming","e":"🏊🏽‍♂️"},"1F3FE":{"k":"man-swimming-1F3FE","n":"man-swimming","e":"🏊🏾‍♂️"},"1F3FF":{"k":"man-swimming-1F3FF","n":"man-swimming","e":"🏊🏿‍♂️"}}},{"n":["woman-swimming"],"e":"🏊‍♀️","c":1,"v":{"1F3FB":{"k":"woman-swimming-1F3FB","n":"woman-swimming","e":"🏊🏻‍♀️"},"1F3FC":{"k":"woman-swimming-1F3FC","n":"woman-swimming","e":"🏊🏼‍♀️"},"1F3FD":{"k":"woman-swimming-1F3FD","n":"woman-swimming","e":"🏊🏽‍♀️"},"1F3FE":{"k":"woman-swimming-1F3FE","n":"woman-swimming","e":"🏊🏾‍♀️"},"1F3FF":{"k":"woman-swimming-1F3FF","n":"woman-swimming","e":"🏊🏿‍♀️"}}},{"n":["person_with_ball"],"e":"⛹️","c":1,"v":{"1F3FB":{"k":"person_with_ball-1F3FB","n":"person_with_ball","e":"⛹🏻"},"1F3FC":{"k":"person_with_ball-1F3FC","n":"person_with_ball","e":"⛹🏼"},"1F3FD":{"k":"person_with_ball-1F3FD","n":"person_with_ball","e":"⛹🏽"},"1F3FE":{"k":"person_with_ball-1F3FE","n":"person_with_ball","e":"⛹🏾"},"1F3FF":{"k":"person_with_ball-1F3FF","n":"person_with_ball","e":"⛹🏿"}}},{"n":["man-bouncing-ball"],"e":"⛹️‍♂️","c":1,"v":{"1F3FB":{"k":"man-bouncing-ball-1F3FB","n":"man-bouncing-ball","e":"⛹🏻‍♂️"},"1F3FC":{"k":"man-bouncing-ball-1F3FC","n":"man-bouncing-ball","e":"⛹🏼‍♂️"},"1F3FD":{"k":"man-bouncing-ball-1F3FD","n":"man-bouncing-ball","e":"⛹🏽‍♂️"},"1F3FE":{"k":"man-bouncing-ball-1F3FE","n":"man-bouncing-ball","e":"⛹🏾‍♂️"},"1F3FF":{"k":"man-bouncing-ball-1F3FF","n":"man-bouncing-ball","e":"⛹🏿‍♂️"}}},{"n":["woman-bouncing-ball"],"e":"⛹️‍♀️","c":1,"v":{"1F3FB":{"k":"woman-bouncing-ball-1F3FB","n":"woman-bouncing-ball","e":"⛹🏻‍♀️"},"1F3FC":{"k":"woman-bouncing-ball-1F3FC","n":"woman-bouncing-ball","e":"⛹🏼‍♀️"},"1F3FD":{"k":"woman-bouncing-ball-1F3FD","n":"woman-bouncing-ball","e":"⛹🏽‍♀️"},"1F3FE":{"k":"woman-bouncing-ball-1F3FE","n":"woman-bouncing-ball","e":"⛹🏾‍♀️"},"1F3FF":{"k":"woman-bouncing-ball-1F3FF","n":"woman-bouncing-ball","e":"⛹🏿‍♀️"}}},{"n":["weight_lifter"],"e":"🏋️","c":1,"v":{"1F3FB":{"k":"weight_lifter-1F3FB","n":"weight_lifter","e":"🏋🏻"},"1F3FC":{"k":"weight_lifter-1F3FC","n":"weight_lifter","e":"🏋🏼"},"1F3FD":{"k":"weight_lifter-1F3FD","n":"weight_lifter","e":"🏋🏽"},"1F3FE":{"k":"weight_lifter-1F3FE","n":"weight_lifter","e":"🏋🏾"},"1F3FF":{"k":"weight_lifter-1F3FF","n":"weight_lifter","e":"🏋🏿"}}},{"n":["man-lifting-weights"],"e":"🏋️‍♂️","c":1,"v":{"1F3FB":{"k":"man-lifting-weights-1F3FB","n":"man-lifting-weights","e":"🏋🏻‍♂️"},"1F3FC":{"k":"man-lifting-weights-1F3FC","n":"man-lifting-weights","e":"🏋🏼‍♂️"},"1F3FD":{"k":"man-lifting-weights-1F3FD","n":"man-lifting-weights","e":"🏋🏽‍♂️"},"1F3FE":{"k":"man-lifting-weights-1F3FE","n":"man-lifting-weights","e":"🏋🏾‍♂️"},"1F3FF":{"k":"man-lifting-weights-1F3FF","n":"man-lifting-weights","e":"🏋🏿‍♂️"}}},{"n":["woman-lifting-weights"],"e":"🏋️‍♀️","c":1,"v":{"1F3FB":{"k":"woman-lifting-weights-1F3FB","n":"woman-lifting-weights","e":"🏋🏻‍♀️"},"1F3FC":{"k":"woman-lifting-weights-1F3FC","n":"woman-lifting-weights","e":"🏋🏼‍♀️"},"1F3FD":{"k":"woman-lifting-weights-1F3FD","n":"woman-lifting-weights","e":"🏋🏽‍♀️"},"1F3FE":{"k":"woman-lifting-weights-1F3FE","n":"woman-lifting-weights","e":"🏋🏾‍♀️"},"1F3FF":{"k":"woman-lifting-weights-1F3FF","n":"woman-lifting-weights","e":"🏋🏿‍♀️"}}},{"n":["bicyclist"],"e":"🚴","c":1,"v":{"1F3FB":{"k":"bicyclist-1F3FB","n":"bicyclist","e":"🚴🏻"},"1F3FC":{"k":"bicyclist-1F3FC","n":"bicyclist","e":"🚴🏼"},"1F3FD":{"k":"bicyclist-1F3FD","n":"bicyclist","e":"🚴🏽"},"1F3FE":{"k":"bicyclist-1F3FE","n":"bicyclist","e":"🚴🏾"},"1F3FF":{"k":"bicyclist-1F3FF","n":"bicyclist","e":"🚴🏿"}}},{"n":["man-biking"],"e":"🚴‍♂️","c":1,"v":{"1F3FB":{"k":"man-biking-1F3FB","n":"man-biking","e":"🚴🏻‍♂️"},"1F3FC":{"k":"man-biking-1F3FC","n":"man-biking","e":"🚴🏼‍♂️"},"1F3FD":{"k":"man-biking-1F3FD","n":"man-biking","e":"🚴🏽‍♂️"},"1F3FE":{"k":"man-biking-1F3FE","n":"man-biking","e":"🚴🏾‍♂️"},"1F3FF":{"k":"man-biking-1F3FF","n":"man-biking","e":"🚴🏿‍♂️"}}},{"n":["woman-biking"],"e":"🚴‍♀️","c":1,"v":{"1F3FB":{"k":"woman-biking-1F3FB","n":"woman-biking","e":"🚴🏻‍♀️"},"1F3FC":{"k":"woman-biking-1F3FC","n":"woman-biking","e":"🚴🏼‍♀️"},"1F3FD":{"k":"woman-biking-1F3FD","n":"woman-biking","e":"🚴🏽‍♀️"},"1F3FE":{"k":"woman-biking-1F3FE","n":"woman-biking","e":"🚴🏾‍♀️"},"1F3FF":{"k":"woman-biking-1F3FF","n":"woman-biking","e":"🚴🏿‍♀️"}}},{"n":["mountain_bicyclist"],"e":"🚵","c":1,"v":{"1F3FB":{"k":"mountain_bicyclist-1F3FB","n":"mountain_bicyclist","e":"🚵🏻"},"1F3FC":{"k":"mountain_bicyclist-1F3FC","n":"mountain_bicyclist","e":"🚵🏼"},"1F3FD":{"k":"mountain_bicyclist-1F3FD","n":"mountain_bicyclist","e":"🚵🏽"},"1F3FE":{"k":"mountain_bicyclist-1F3FE","n":"mountain_bicyclist","e":"🚵🏾"},"1F3FF":{"k":"mountain_bicyclist-1F3FF","n":"mountain_bicyclist","e":"🚵🏿"}}},{"n":["man-mountain-biking"],"e":"🚵‍♂️","c":1,"v":{"1F3FB":{"k":"man-mountain-biking-1F3FB","n":"man-mountain-biking","e":"🚵🏻‍♂️"},"1F3FC":{"k":"man-mountain-biking-1F3FC","n":"man-mountain-biking","e":"🚵🏼‍♂️"},"1F3FD":{"k":"man-mountain-biking-1F3FD","n":"man-mountain-biking","e":"🚵🏽‍♂️"},"1F3FE":{"k":"man-mountain-biking-1F3FE","n":"man-mountain-biking","e":"🚵🏾‍♂️"},"1F3FF":{"k":"man-mountain-biking-1F3FF","n":"man-mountain-biking","e":"🚵🏿‍♂️"}}},{"n":["woman-mountain-biking"],"e":"🚵‍♀️","c":1,"v":{"1F3FB":{"k":"woman-mountain-biking-1F3FB","n":"woman-mountain-biking","e":"🚵🏻‍♀️"},"1F3FC":{"k":"woman-mountain-biking-1F3FC","n":"woman-mountain-biking","e":"🚵🏼‍♀️"},"1F3FD":{"k":"woman-mountain-biking-1F3FD","n":"woman-mountain-biking","e":"🚵🏽‍♀️"},"1F3FE":{"k":"woman-mountain-biking-1F3FE","n":"woman-mountain-biking","e":"🚵🏾‍♀️"},"1F3FF":{"k":"woman-mountain-biking-1F3FF","n":"woman-mountain-biking","e":"🚵🏿‍♀️"}}},{"n":["racing_car"],"e":"🏎️","c":1},{"n":["racing_motorcycle"],"e":"🏍️","c":1},{"n":["person_doing_cartwheel"],"e":"🤸","c":1,"v":{"1F3FB":{"k":"person_doing_cartwheel-1F3FB","n":"person_doing_cartwheel","e":"🤸🏻"},"1F3FC":{"k":"person_doing_cartwheel-1F3FC","n":"person_doing_cartwheel","e":"🤸🏼"},"1F3FD":{"k":"person_doing_cartwheel-1F3FD","n":"person_doing_cartwheel","e":"🤸🏽"},"1F3FE":{"k":"person_doing_cartwheel-1F3FE","n":"person_doing_cartwheel","e":"🤸🏾"},"1F3FF":{"k":"person_doing_cartwheel-1F3FF","n":"person_doing_cartwheel","e":"🤸🏿"}}},{"n":["man-cartwheeling"],"e":"🤸‍♂️","c":1,"v":{"1F3FB":{"k":"man-cartwheeling-1F3FB","n":"man-cartwheeling","e":"🤸🏻‍♂️"},"1F3FC":{"k":"man-cartwheeling-1F3FC","n":"man-cartwheeling","e":"🤸🏼‍♂️"},"1F3FD":{"k":"man-cartwheeling-1F3FD","n":"man-cartwheeling","e":"🤸🏽‍♂️"},"1F3FE":{"k":"man-cartwheeling-1F3FE","n":"man-cartwheeling","e":"🤸🏾‍♂️"},"1F3FF":{"k":"man-cartwheeling-1F3FF","n":"man-cartwheeling","e":"🤸🏿‍♂️"}}},{"n":["woman-cartwheeling"],"e":"🤸‍♀️","c":1,"v":{"1F3FB":{"k":"woman-cartwheeling-1F3FB","n":"woman-cartwheeling","e":"🤸🏻‍♀️"},"1F3FC":{"k":"woman-cartwheeling-1F3FC","n":"woman-cartwheeling","e":"🤸🏼‍♀️"},"1F3FD":{"k":"woman-cartwheeling-1F3FD","n":"woman-cartwheeling","e":"🤸🏽‍♀️"},"1F3FE":{"k":"woman-cartwheeling-1F3FE","n":"woman-cartwheeling","e":"🤸🏾‍♀️"},"1F3FF":{"k":"woman-cartwheeling-1F3FF","n":"woman-cartwheeling","e":"🤸🏿‍♀️"}}},{"n":["wrestlers"],"e":"🤼","c":1},{"n":["man-wrestling"],"e":"🤼‍♂️","c":1},{"n":["woman-wrestling"],"e":"🤼‍♀️","c":1},{"n":["water_polo"],"e":"🤽","c":1,"v":{"1F3FB":{"k":"water_polo-1F3FB","n":"water_polo","e":"🤽🏻"},"1F3FC":{"k":"water_polo-1F3FC","n":"water_polo","e":"🤽🏼"},"1F3FD":{"k":"water_polo-1F3FD","n":"water_polo","e":"🤽🏽"},"1F3FE":{"k":"water_polo-1F3FE","n":"water_polo","e":"🤽🏾"},"1F3FF":{"k":"water_polo-1F3FF","n":"water_polo","e":"🤽🏿"}}},{"n":["man-playing-water-polo"],"e":"🤽‍♂️","c":1,"v":{"1F3FB":{"k":"man-playing-water-polo-1F3FB","n":"man-playing-water-polo","e":"🤽🏻‍♂️"},"1F3FC":{"k":"man-playing-water-polo-1F3FC","n":"man-playing-water-polo","e":"🤽🏼‍♂️"},"1F3FD":{"k":"man-playing-water-polo-1F3FD","n":"man-playing-water-polo","e":"🤽🏽‍♂️"},"1F3FE":{"k":"man-playing-water-polo-1F3FE","n":"man-playing-water-polo","e":"🤽🏾‍♂️"},"1F3FF":{"k":"man-playing-water-polo-1F3FF","n":"man-playing-water-polo","e":"🤽🏿‍♂️"}}},{"n":["woman-playing-water-polo"],"e":"🤽‍♀️","c":1,"v":{"1F3FB":{"k":"woman-playing-water-polo-1F3FB","n":"woman-playing-water-polo","e":"🤽🏻‍♀️"},"1F3FC":{"k":"woman-playing-water-polo-1F3FC","n":"woman-playing-water-polo","e":"🤽🏼‍♀️"},"1F3FD":{"k":"woman-playing-water-polo-1F3FD","n":"woman-playing-water-polo","e":"🤽🏽‍♀️"},"1F3FE":{"k":"woman-playing-water-polo-1F3FE","n":"woman-playing-water-polo","e":"🤽🏾‍♀️"},"1F3FF":{"k":"woman-playing-water-polo-1F3FF","n":"woman-playing-water-polo","e":"🤽🏿‍♀️"}}},{"n":["handball"],"e":"🤾","c":1,"v":{"1F3FB":{"k":"handball-1F3FB","n":"handball","e":"🤾🏻"},"1F3FC":{"k":"handball-1F3FC","n":"handball","e":"🤾🏼"},"1F3FD":{"k":"handball-1F3FD","n":"handball","e":"🤾🏽"},"1F3FE":{"k":"handball-1F3FE","n":"handball","e":"🤾🏾"},"1F3FF":{"k":"handball-1F3FF","n":"handball","e":"🤾🏿"}}},{"n":["man-playing-handball"],"e":"🤾‍♂️","c":1,"v":{"1F3FB":{"k":"man-playing-handball-1F3FB","n":"man-playing-handball","e":"🤾🏻‍♂️"},"1F3FC":{"k":"man-playing-handball-1F3FC","n":"man-playing-handball","e":"🤾🏼‍♂️"},"1F3FD":{"k":"man-playing-handball-1F3FD","n":"man-playing-handball","e":"🤾🏽‍♂️"},"1F3FE":{"k":"man-playing-handball-1F3FE","n":"man-playing-handball","e":"🤾🏾‍♂️"},"1F3FF":{"k":"man-playing-handball-1F3FF","n":"man-playing-handball","e":"🤾🏿‍♂️"}}},{"n":["woman-playing-handball"],"e":"🤾‍♀️","c":1,"v":{"1F3FB":{"k":"woman-playing-handball-1F3FB","n":"woman-playing-handball","e":"🤾🏻‍♀️"},"1F3FC":{"k":"woman-playing-handball-1F3FC","n":"woman-playing-handball","e":"🤾🏼‍♀️"},"1F3FD":{"k":"woman-playing-handball-1F3FD","n":"woman-playing-handball","e":"🤾🏽‍♀️"},"1F3FE":{"k":"woman-playing-handball-1F3FE","n":"woman-playing-handball","e":"🤾🏾‍♀️"},"1F3FF":{"k":"woman-playing-handball-1F3FF","n":"woman-playing-handball","e":"🤾🏿‍♀️"}}},{"n":["juggling"],"e":"🤹","c":1,"v":{"1F3FB":{"k":"juggling-1F3FB","n":"juggling","e":"🤹🏻"},"1F3FC":{"k":"juggling-1F3FC","n":"juggling","e":"🤹🏼"},"1F3FD":{"k":"juggling-1F3FD","n":"juggling","e":"🤹🏽"},"1F3FE":{"k":"juggling-1F3FE","n":"juggling","e":"🤹🏾"},"1F3FF":{"k":"juggling-1F3FF","n":"juggling","e":"🤹🏿"}}},{"n":["man-juggling"],"e":"🤹‍♂️","c":1,"v":{"1F3FB":{"k":"man-juggling-1F3FB","n":"man-juggling","e":"🤹🏻‍♂️"},"1F3FC":{"k":"man-juggling-1F3FC","n":"man-juggling","e":"🤹🏼‍♂️"},"1F3FD":{"k":"man-juggling-1F3FD","n":"man-juggling","e":"🤹🏽‍♂️"},"1F3FE":{"k":"man-juggling-1F3FE","n":"man-juggling","e":"🤹🏾‍♂️"},"1F3FF":{"k":"man-juggling-1F3FF","n":"man-juggling","e":"🤹🏿‍♂️"}}},{"n":["woman-juggling"],"e":"🤹‍♀️","c":1,"v":{"1F3FB":{"k":"woman-juggling-1F3FB","n":"woman-juggling","e":"🤹🏻‍♀️"},"1F3FC":{"k":"woman-juggling-1F3FC","n":"woman-juggling","e":"🤹🏼‍♀️"},"1F3FD":{"k":"woman-juggling-1F3FD","n":"woman-juggling","e":"🤹🏽‍♀️"},"1F3FE":{"k":"woman-juggling-1F3FE","n":"woman-juggling","e":"🤹🏾‍♀️"},"1F3FF":{"k":"woman-juggling-1F3FF","n":"woman-juggling","e":"🤹🏿‍♀️"}}},{"n":["couple","man_and_woman_holding_hands"],"e":"👫","c":1},{"n":["two_men_holding_hands"],"e":"👬","c":1},{"n":["two_women_holding_hands"],"e":"👭","c":1},{"n":["couplekiss"],"e":"💏","c":1},{"n":["woman-kiss-man"],"e":"👩‍❤️‍💋‍👨","c":1},{"n":["man-kiss-man"],"e":"👨‍❤️‍💋‍👨","c":1},{"n":["woman-kiss-woman"],"e":"👩‍❤️‍💋‍👩","c":1},{"n":["couple_with_heart"],"e":"💑","c":1},{"n":["woman-heart-man"],"e":"👩‍❤️‍👨","c":1},{"n":["man-heart-man"],"e":"👨‍❤️‍👨","c":1},{"n":["woman-heart-woman"],"e":"👩‍❤️‍👩","c":1},{"n":["family","man-woman-boy"],"e":"👪","c":1},{"n":["man-woman-boy","family"],"e":"👨‍👩‍👦","c":1},{"n":["man-woman-girl"],"e":"👨‍👩‍👧","c":1},{"n":["man-woman-girl-boy"],"e":"👨‍👩‍👧‍👦","c":1},{"n":["man-woman-boy-boy"],"e":"👨‍👩‍👦‍👦","c":1},{"n":["man-woman-girl-girl"],"e":"👨‍👩‍👧‍👧","c":1},{"n":["man-man-boy"],"e":"👨‍👨‍👦","c":1},{"n":["man-man-girl"],"e":"👨‍👨‍👧","c":1},{"n":["man-man-girl-boy"],"e":"👨‍👨‍👧‍👦","c":1},{"n":["man-man-boy-boy"],"e":"👨‍👨‍👦‍👦","c":1},{"n":["man-man-girl-girl"],"e":"👨‍👨‍👧‍👧","c":1},{"n":["woman-woman-boy"],"e":"👩‍👩‍👦","c":1},{"n":["woman-woman-girl"],"e":"👩‍👩‍👧","c":1},{"n":["woman-woman-girl-boy"],"e":"👩‍👩‍👧‍👦","c":1},{"n":["woman-woman-boy-boy"],"e":"👩‍👩‍👦‍👦","c":1},{"n":["woman-woman-girl-girl"],"e":"👩‍👩‍👧‍👧","c":1},{"n":["man-boy"],"e":"👨‍👦","c":1},{"n":["man-boy-boy"],"e":"👨‍👦‍👦","c":1},{"n":["man-girl"],"e":"👨‍👧","c":1},{"n":["man-girl-boy"],"e":"👨‍👧‍👦","c":1},{"n":["man-girl-girl"],"e":"👨‍👧‍👧","c":1},{"n":["woman-boy"],"e":"👩‍👦","c":1},{"n":["woman-boy-boy"],"e":"👩‍👦‍👦","c":1},{"n":["woman-girl"],"e":"👩‍👧","c":1},{"n":["woman-girl-boy"],"e":"👩‍👧‍👦","c":1},{"n":["woman-girl-girl"],"e":"👩‍👧‍👧","c":1},{"n":["selfie"],"e":"🤳","c":1,"v":{"1F3FB":{"k":"selfie-1F3FB","n":"selfie","e":"🤳🏻"},"1F3FC":{"k":"selfie-1F3FC","n":"selfie","e":"🤳🏼"},"1F3FD":{"k":"selfie-1F3FD","n":"selfie","e":"🤳🏽"},"1F3FE":{"k":"selfie-1F3FE","n":"selfie","e":"🤳🏾"},"1F3FF":{"k":"selfie-1F3FF","n":"selfie","e":"🤳🏿"}}},{"n":["muscle"],"e":"💪","c":1,"v":{"1F3FB":{"k":"muscle-1F3FB","n":"muscle","e":"💪🏻"},"1F3FC":{"k":"muscle-1F3FC","n":"muscle","e":"💪🏼"},"1F3FD":{"k":"muscle-1F3FD","n":"muscle","e":"💪🏽"},"1F3FE":{"k":"muscle-1F3FE","n":"muscle","e":"💪🏾"},"1F3FF":{"k":"muscle-1F3FF","n":"muscle","e":"💪🏿"}}},{"n":["point_left"],"e":"👈","c":1,"v":{"1F3FB":{"k":"point_left-1F3FB","n":"point_left","e":"👈🏻"},"1F3FC":{"k":"point_left-1F3FC","n":"point_left","e":"👈🏼"},"1F3FD":{"k":"point_left-1F3FD","n":"point_left","e":"👈🏽"},"1F3FE":{"k":"point_left-1F3FE","n":"point_left","e":"👈🏾"},"1F3FF":{"k":"point_left-1F3FF","n":"point_left","e":"👈🏿"}}},{"n":["point_right"],"e":"👉","c":1,"v":{"1F3FB":{"k":"point_right-1F3FB","n":"point_right","e":"👉🏻"},"1F3FC":{"k":"point_right-1F3FC","n":"point_right","e":"👉🏼"},"1F3FD":{"k":"point_right-1F3FD","n":"point_right","e":"👉🏽"},"1F3FE":{"k":"point_right-1F3FE","n":"point_right","e":"👉🏾"},"1F3FF":{"k":"point_right-1F3FF","n":"point_right","e":"👉🏿"}}},{"n":["point_up"],"e":"☝️","c":1,"v":{"1F3FB":{"k":"point_up-1F3FB","n":"point_up","e":"☝🏻"},"1F3FC":{"k":"point_up-1F3FC","n":"point_up","e":"☝🏼"},"1F3FD":{"k":"point_up-1F3FD","n":"point_up","e":"☝🏽"},"1F3FE":{"k":"point_up-1F3FE","n":"point_up","e":"☝🏾"},"1F3FF":{"k":"point_up-1F3FF","n":"point_up","e":"☝🏿"}}},{"n":["point_up_2"],"e":"👆","c":1,"v":{"1F3FB":{"k":"point_up_2-1F3FB","n":"point_up_2","e":"👆🏻"},"1F3FC":{"k":"point_up_2-1F3FC","n":"point_up_2","e":"👆🏼"},"1F3FD":{"k":"point_up_2-1F3FD","n":"point_up_2","e":"👆🏽"},"1F3FE":{"k":"point_up_2-1F3FE","n":"point_up_2","e":"👆🏾"},"1F3FF":{"k":"point_up_2-1F3FF","n":"point_up_2","e":"👆🏿"}}},{"n":["middle_finger","reversed_hand_with_middle_finger_extended"],"e":"🖕","c":1,"v":{"1F3FB":{"k":"middle_finger-1F3FB","n":"middle_finger","e":"🖕🏻"},"1F3FC":{"k":"middle_finger-1F3FC","n":"middle_finger","e":"🖕🏼"},"1F3FD":{"k":"middle_finger-1F3FD","n":"middle_finger","e":"🖕🏽"},"1F3FE":{"k":"middle_finger-1F3FE","n":"middle_finger","e":"🖕🏾"},"1F3FF":{"k":"middle_finger-1F3FF","n":"middle_finger","e":"🖕🏿"}}},{"n":["point_down"],"e":"👇","c":1,"v":{"1F3FB":{"k":"point_down-1F3FB","n":"point_down","e":"👇🏻"},"1F3FC":{"k":"point_down-1F3FC","n":"point_down","e":"👇🏼"},"1F3FD":{"k":"point_down-1F3FD","n":"point_down","e":"👇🏽"},"1F3FE":{"k":"point_down-1F3FE","n":"point_down","e":"👇🏾"},"1F3FF":{"k":"point_down-1F3FF","n":"point_down","e":"👇🏿"}}},{"n":["v"],"e":"✌️","c":1,"v":{"1F3FB":{"k":"v-1F3FB","n":"v","e":"✌🏻"},"1F3FC":{"k":"v-1F3FC","n":"v","e":"✌🏼"},"1F3FD":{"k":"v-1F3FD","n":"v","e":"✌🏽"},"1F3FE":{"k":"v-1F3FE","n":"v","e":"✌🏾"},"1F3FF":{"k":"v-1F3FF","n":"v","e":"✌🏿"}}},{"n":["crossed_fingers","hand_with_index_and_middle_fingers_crossed"],"e":"🤞","c":1,"v":{"1F3FB":{"k":"crossed_fingers-1F3FB","n":"crossed_fingers","e":"🤞🏻"},"1F3FC":{"k":"crossed_fingers-1F3FC","n":"crossed_fingers","e":"🤞🏼"},"1F3FD":{"k":"crossed_fingers-1F3FD","n":"crossed_fingers","e":"🤞🏽"},"1F3FE":{"k":"crossed_fingers-1F3FE","n":"crossed_fingers","e":"🤞🏾"},"1F3FF":{"k":"crossed_fingers-1F3FF","n":"crossed_fingers","e":"🤞🏿"}}},{"n":["spock-hand"],"e":"🖖","c":1,"v":{"1F3FB":{"k":"spock-hand-1F3FB","n":"spock-hand","e":"🖖🏻"},"1F3FC":{"k":"spock-hand-1F3FC","n":"spock-hand","e":"🖖🏼"},"1F3FD":{"k":"spock-hand-1F3FD","n":"spock-hand","e":"🖖🏽"},"1F3FE":{"k":"spock-hand-1F3FE","n":"spock-hand","e":"🖖🏾"},"1F3FF":{"k":"spock-hand-1F3FF","n":"spock-hand","e":"🖖🏿"}}},{"n":["the_horns","sign_of_the_horns"],"e":"🤘","c":1,"v":{"1F3FB":{"k":"the_horns-1F3FB","n":"the_horns","e":"🤘🏻"},"1F3FC":{"k":"the_horns-1F3FC","n":"the_horns","e":"🤘🏼"},"1F3FD":{"k":"the_horns-1F3FD","n":"the_horns","e":"🤘🏽"},"1F3FE":{"k":"the_horns-1F3FE","n":"the_horns","e":"🤘🏾"},"1F3FF":{"k":"the_horns-1F3FF","n":"the_horns","e":"🤘🏿"}}},{"n":["call_me_hand"],"e":"🤙","c":1,"v":{"1F3FB":{"k":"call_me_hand-1F3FB","n":"call_me_hand","e":"🤙🏻"},"1F3FC":{"k":"call_me_hand-1F3FC","n":"call_me_hand","e":"🤙🏼"},"1F3FD":{"k":"call_me_hand-1F3FD","n":"call_me_hand","e":"🤙🏽"},"1F3FE":{"k":"call_me_hand-1F3FE","n":"call_me_hand","e":"🤙🏾"},"1F3FF":{"k":"call_me_hand-1F3FF","n":"call_me_hand","e":"🤙🏿"}}},{"n":["raised_hand_with_fingers_splayed"],"e":"🖐️","c":1,"v":{"1F3FB":{"k":"raised_hand_with_fingers_splayed-1F3FB","n":"raised_hand_with_fingers_splayed","e":"🖐🏻"},"1F3FC":{"k":"raised_hand_with_fingers_splayed-1F3FC","n":"raised_hand_with_fingers_splayed","e":"🖐🏼"},"1F3FD":{"k":"raised_hand_with_fingers_splayed-1F3FD","n":"raised_hand_with_fingers_splayed","e":"🖐🏽"},"1F3FE":{"k":"raised_hand_with_fingers_splayed-1F3FE","n":"raised_hand_with_fingers_splayed","e":"🖐🏾"},"1F3FF":{"k":"raised_hand_with_fingers_splayed-1F3FF","n":"raised_hand_with_fingers_splayed","e":"🖐🏿"}}},{"n":["hand","raised_hand"],"e":"✋","c":1,"v":{"1F3FB":{"k":"hand-1F3FB","n":"hand","e":"✋🏻"},"1F3FC":{"k":"hand-1F3FC","n":"hand","e":"✋🏼"},"1F3FD":{"k":"hand-1F3FD","n":"hand","e":"✋🏽"},"1F3FE":{"k":"hand-1F3FE","n":"hand","e":"✋🏾"},"1F3FF":{"k":"hand-1F3FF","n":"hand","e":"✋🏿"}}},{"n":["ok_hand"],"e":"👌","c":1,"v":{"1F3FB":{"k":"ok_hand-1F3FB","n":"ok_hand","e":"👌🏻"},"1F3FC":{"k":"ok_hand-1F3FC","n":"ok_hand","e":"👌🏼"},"1F3FD":{"k":"ok_hand-1F3FD","n":"ok_hand","e":"👌🏽"},"1F3FE":{"k":"ok_hand-1F3FE","n":"ok_hand","e":"👌🏾"},"1F3FF":{"k":"ok_hand-1F3FF","n":"ok_hand","e":"👌🏿"}}},{"n":["+1","thumbsup"],"e":"👍","c":1,"v":{"1F3FB":{"k":"+1-1F3FB","n":"+1","e":"👍🏻"},"1F3FC":{"k":"+1-1F3FC","n":"+1","e":"👍🏼"},"1F3FD":{"k":"+1-1F3FD","n":"+1","e":"👍🏽"},"1F3FE":{"k":"+1-1F3FE","n":"+1","e":"👍🏾"},"1F3FF":{"k":"+1-1F3FF","n":"+1","e":"👍🏿"}}},{"n":["-1","thumbsdown"],"e":"👎","c":1,"v":{"1F3FB":{"k":"-1-1F3FB","n":"-1","e":"👎🏻"},"1F3FC":{"k":"-1-1F3FC","n":"-1","e":"👎🏼"},"1F3FD":{"k":"-1-1F3FD","n":"-1","e":"👎🏽"},"1F3FE":{"k":"-1-1F3FE","n":"-1","e":"👎🏾"},"1F3FF":{"k":"-1-1F3FF","n":"-1","e":"👎🏿"}}},{"n":["fist"],"e":"✊","c":1,"v":{"1F3FB":{"k":"fist-1F3FB","n":"fist","e":"✊🏻"},"1F3FC":{"k":"fist-1F3FC","n":"fist","e":"✊🏼"},"1F3FD":{"k":"fist-1F3FD","n":"fist","e":"✊🏽"},"1F3FE":{"k":"fist-1F3FE","n":"fist","e":"✊🏾"},"1F3FF":{"k":"fist-1F3FF","n":"fist","e":"✊🏿"}}},{"n":["facepunch","punch"],"e":"👊","c":1,"v":{"1F3FB":{"k":"facepunch-1F3FB","n":"facepunch","e":"👊🏻"},"1F3FC":{"k":"facepunch-1F3FC","n":"facepunch","e":"👊🏼"},"1F3FD":{"k":"facepunch-1F3FD","n":"facepunch","e":"👊🏽"},"1F3FE":{"k":"facepunch-1F3FE","n":"facepunch","e":"👊🏾"},"1F3FF":{"k":"facepunch-1F3FF","n":"facepunch","e":"👊🏿"}}},{"n":["left-facing_fist"],"e":"🤛","c":1,"v":{"1F3FB":{"k":"left-facing_fist-1F3FB","n":"left-facing_fist","e":"🤛🏻"},"1F3FC":{"k":"left-facing_fist-1F3FC","n":"left-facing_fist","e":"🤛🏼"},"1F3FD":{"k":"left-facing_fist-1F3FD","n":"left-facing_fist","e":"🤛🏽"},"1F3FE":{"k":"left-facing_fist-1F3FE","n":"left-facing_fist","e":"🤛🏾"},"1F3FF":{"k":"left-facing_fist-1F3FF","n":"left-facing_fist","e":"🤛🏿"}}},{"n":["right-facing_fist"],"e":"🤜","c":1,"v":{"1F3FB":{"k":"right-facing_fist-1F3FB","n":"right-facing_fist","e":"🤜🏻"},"1F3FC":{"k":"right-facing_fist-1F3FC","n":"right-facing_fist","e":"🤜🏼"},"1F3FD":{"k":"right-facing_fist-1F3FD","n":"right-facing_fist","e":"🤜🏽"},"1F3FE":{"k":"right-facing_fist-1F3FE","n":"right-facing_fist","e":"🤜🏾"},"1F3FF":{"k":"right-facing_fist-1F3FF","n":"right-facing_fist","e":"🤜🏿"}}},{"n":["raised_back_of_hand"],"e":"🤚","c":1,"v":{"1F3FB":{"k":"raised_back_of_hand-1F3FB","n":"raised_back_of_hand","e":"🤚🏻"},"1F3FC":{"k":"raised_back_of_hand-1F3FC","n":"raised_back_of_hand","e":"🤚🏼"},"1F3FD":{"k":"raised_back_of_hand-1F3FD","n":"raised_back_of_hand","e":"🤚🏽"},"1F3FE":{"k":"raised_back_of_hand-1F3FE","n":"raised_back_of_hand","e":"🤚🏾"},"1F3FF":{"k":"raised_back_of_hand-1F3FF","n":"raised_back_of_hand","e":"🤚🏿"}}},{"n":["wave"],"e":"👋","c":1,"v":{"1F3FB":{"k":"wave-1F3FB","n":"wave","e":"👋🏻"},"1F3FC":{"k":"wave-1F3FC","n":"wave","e":"👋🏼"},"1F3FD":{"k":"wave-1F3FD","n":"wave","e":"👋🏽"},"1F3FE":{"k":"wave-1F3FE","n":"wave","e":"👋🏾"},"1F3FF":{"k":"wave-1F3FF","n":"wave","e":"👋🏿"}}},{"n":["i_love_you_hand_sign"],"e":"🤟","c":1,"v":{"1F3FB":{"k":"i_love_you_hand_sign-1F3FB","n":"i_love_you_hand_sign","e":"🤟🏻"},"1F3FC":{"k":"i_love_you_hand_sign-1F3FC","n":"i_love_you_hand_sign","e":"🤟🏼"},"1F3FD":{"k":"i_love_you_hand_sign-1F3FD","n":"i_love_you_hand_sign","e":"🤟🏽"},"1F3FE":{"k":"i_love_you_hand_sign-1F3FE","n":"i_love_you_hand_sign","e":"🤟🏾"},"1F3FF":{"k":"i_love_you_hand_sign-1F3FF","n":"i_love_you_hand_sign","e":"🤟🏿"}}},{"n":["writing_hand"],"e":"✍️","c":1,"v":{"1F3FB":{"k":"writing_hand-1F3FB","n":"writing_hand","e":"✍🏻"},"1F3FC":{"k":"writing_hand-1F3FC","n":"writing_hand","e":"✍🏼"},"1F3FD":{"k":"writing_hand-1F3FD","n":"writing_hand","e":"✍🏽"},"1F3FE":{"k":"writing_hand-1F3FE","n":"writing_hand","e":"✍🏾"},"1F3FF":{"k":"writing_hand-1F3FF","n":"writing_hand","e":"✍🏿"}}},{"n":["clap"],"e":"👏","c":1,"v":{"1F3FB":{"k":"clap-1F3FB","n":"clap","e":"👏🏻"},"1F3FC":{"k":"clap-1F3FC","n":"clap","e":"👏🏼"},"1F3FD":{"k":"clap-1F3FD","n":"clap","e":"👏🏽"},"1F3FE":{"k":"clap-1F3FE","n":"clap","e":"👏🏾"},"1F3FF":{"k":"clap-1F3FF","n":"clap","e":"👏🏿"}}},{"n":["open_hands"],"e":"👐","c":1,"v":{"1F3FB":{"k":"open_hands-1F3FB","n":"open_hands","e":"👐🏻"},"1F3FC":{"k":"open_hands-1F3FC","n":"open_hands","e":"👐🏼"},"1F3FD":{"k":"open_hands-1F3FD","n":"open_hands","e":"👐🏽"},"1F3FE":{"k":"open_hands-1F3FE","n":"open_hands","e":"👐🏾"},"1F3FF":{"k":"open_hands-1F3FF","n":"open_hands","e":"👐🏿"}}},{"n":["raised_hands"],"e":"🙌","c":1,"v":{"1F3FB":{"k":"raised_hands-1F3FB","n":"raised_hands","e":"🙌🏻"},"1F3FC":{"k":"raised_hands-1F3FC","n":"raised_hands","e":"🙌🏼"},"1F3FD":{"k":"raised_hands-1F3FD","n":"raised_hands","e":"🙌🏽"},"1F3FE":{"k":"raised_hands-1F3FE","n":"raised_hands","e":"🙌🏾"},"1F3FF":{"k":"raised_hands-1F3FF","n":"raised_hands","e":"🙌🏿"}}},{"n":["palms_up_together"],"e":"🤲","c":1,"v":{"1F3FB":{"k":"palms_up_together-1F3FB","n":"palms_up_together","e":"🤲🏻"},"1F3FC":{"k":"palms_up_together-1F3FC","n":"palms_up_together","e":"🤲🏼"},"1F3FD":{"k":"palms_up_together-1F3FD","n":"palms_up_together","e":"🤲🏽"},"1F3FE":{"k":"palms_up_together-1F3FE","n":"palms_up_together","e":"🤲🏾"},"1F3FF":{"k":"palms_up_together-1F3FF","n":"palms_up_together","e":"🤲🏿"}}},{"n":["pray"],"e":"🙏","c":1,"v":{"1F3FB":{"k":"pray-1F3FB","n":"pray","e":"🙏🏻"},"1F3FC":{"k":"pray-1F3FC","n":"pray","e":"🙏🏼"},"1F3FD":{"k":"pray-1F3FD","n":"pray","e":"🙏🏽"},"1F3FE":{"k":"pray-1F3FE","n":"pray","e":"🙏🏾"},"1F3FF":{"k":"pray-1F3FF","n":"pray","e":"🙏🏿"}}},{"n":["handshake"],"e":"🤝","c":1},{"n":["nail_care"],"e":"💅","c":1,"v":{"1F3FB":{"k":"nail_care-1F3FB","n":"nail_care","e":"💅🏻"},"1F3FC":{"k":"nail_care-1F3FC","n":"nail_care","e":"💅🏼"},"1F3FD":{"k":"nail_care-1F3FD","n":"nail_care","e":"💅🏽"},"1F3FE":{"k":"nail_care-1F3FE","n":"nail_care","e":"💅🏾"},"1F3FF":{"k":"nail_care-1F3FF","n":"nail_care","e":"💅🏿"}}},{"n":["ear"],"e":"👂","c":1,"v":{"1F3FB":{"k":"ear-1F3FB","n":"ear","e":"👂🏻"},"1F3FC":{"k":"ear-1F3FC","n":"ear","e":"👂🏼"},"1F3FD":{"k":"ear-1F3FD","n":"ear","e":"👂🏽"},"1F3FE":{"k":"ear-1F3FE","n":"ear","e":"👂🏾"},"1F3FF":{"k":"ear-1F3FF","n":"ear","e":"👂🏿"}}},{"n":["nose"],"e":"👃","c":1,"v":{"1F3FB":{"k":"nose-1F3FB","n":"nose","e":"👃🏻"},"1F3FC":{"k":"nose-1F3FC","n":"nose","e":"👃🏼"},"1F3FD":{"k":"nose-1F3FD","n":"nose","e":"👃🏽"},"1F3FE":{"k":"nose-1F3FE","n":"nose","e":"👃🏾"},"1F3FF":{"k":"nose-1F3FF","n":"nose","e":"👃🏿"}}},{"n":["footprints"],"e":"👣","c":1},{"n":["eyes"],"e":"👀","c":1},{"n":["eye"],"e":"👁️","c":1},{"n":["eye-in-speech-bubble"],"e":"👁️‍🗨️","c":1},{"n":["brain"],"e":"🧠","c":1},{"n":["tongue"],"e":"👅","c":1},{"n":["lips"],"e":"👄","c":1},{"n":["kiss"],"e":"💋","c":1},{"n":["cupid"],"e":"💘","c":1},{"n":["heart"],"e":"❤️","c":1},{"n":["heartbeat"],"e":"💓","c":1},{"n":["broken_heart"],"e":"💔","c":1},{"n":["two_hearts"],"e":"💕","c":1},{"n":["sparkling_heart"],"e":"💖","c":1},{"n":["heartpulse"],"e":"💗","c":1},{"n":["blue_heart"],"e":"💙","c":1},{"n":["green_heart"],"e":"💚","c":1},{"n":["yellow_heart"],"e":"💛","c":1},{"n":["orange_heart"],"e":"🧡","c":1},{"n":["purple_heart"],"e":"💜","c":1},{"n":["black_heart"],"e":"🖤","c":1},{"n":["gift_heart"],"e":"💝","c":1},{"n":["revolving_hearts"],"e":"💞","c":1},{"n":["heart_decoration"],"e":"💟","c":1},{"n":["heavy_heart_exclamation_mark_ornament"],"e":"❣️","c":1},{"n":["love_letter"],"e":"💌","c":1},{"n":["zzz"],"e":"💤","c":1},{"n":["anger"],"e":"💢","c":1},{"n":["bomb"],"e":"💣","c":1},{"n":["boom","collision"],"e":"💥","c":1},{"n":["sweat_drops"],"e":"💦","c":1},{"n":["dash"],"e":"💨","c":1},{"n":["dizzy"],"e":"💫","c":1},{"n":["speech_balloon"],"e":"💬","c":1},{"n":["left_speech_bubble"],"e":"🗨️","c":1},{"n":["right_anger_bubble"],"e":"🗯️","c":1},{"n":["thought_balloon"],"e":"💭","c":1},{"n":["hole"],"e":"🕳️","c":1},{"n":["eyeglasses"],"e":"👓","c":1},{"n":["dark_sunglasses"],"e":"🕶️","c":1},{"n":["necktie"],"e":"👔","c":1},{"n":["shirt","tshirt"],"e":"👕","c":1},{"n":["jeans"],"e":"👖","c":1},{"n":["scarf"],"e":"🧣","c":1},{"n":["gloves"],"e":"🧤","c":1},{"n":["coat"],"e":"🧥","c":1},{"n":["socks"],"e":"🧦","c":1},{"n":["dress"],"e":"👗","c":1},{"n":["kimono"],"e":"👘","c":1},{"n":["bikini"],"e":"👙","c":1},{"n":["womans_clothes"],"e":"👚","c":1},{"n":["purse"],"e":"👛","c":1},{"n":["handbag"],"e":"👜","c":1},{"n":["pouch"],"e":"👝","c":1},{"n":["shopping_bags"],"e":"🛍️","c":1},{"n":["school_satchel"],"e":"🎒","c":1},{"n":["mans_shoe","shoe"],"e":"👞","c":1},{"n":["athletic_shoe"],"e":"👟","c":1},{"n":["high_heel"],"e":"👠","c":1},{"n":["sandal"],"e":"👡","c":1},{"n":["boot"],"e":"👢","c":1},{"n":["crown"],"e":"👑","c":1},{"n":["womans_hat"],"e":"👒","c":1},{"n":["tophat"],"e":"🎩","c":1},{"n":["mortar_board"],"e":"🎓","c":1},{"n":["billed_cap"],"e":"🧢","c":1},{"n":["helmet_with_white_cross"],"e":"⛑️","c":1},{"n":["prayer_beads"],"e":"📿","c":1},{"n":["lipstick"],"e":"💄","c":1},{"n":["ring"],"e":"💍","c":1},{"n":["gem"],"e":"💎","c":1}];

  var EMOJI='emoji';var SHOW_TABS='showTabs';var HIDE_TABS='hideTabs';var SHOW_SEARCH_RESULTS='showSearchResults';var SHOW_PREVIEW='showPreview';var HIDE_PREVIEW='hidePreview';var HIDE_VARIANT_POPUP='hideVariantPopup';

  function createElement(tagName,className){var element=document.createElement(tagName);if(className){element.className=className;}return element;}function empty(element){while(element.firstChild){element.removeChild(element.firstChild);}}function getEmojiName(emoji){return typeof emoji.n==='string'?emoji.n:emoji.n[0];}

  var CLASS_PREVIEW='emoji-picker__preview';var CLASS_PREVIEW_EMOJI='emoji-picker__preview-emoji';var CLASS_PREVIEW_NAME='emoji-picker__preview-name';var EmojiPreview=/*#__PURE__*/function(){function EmojiPreview(events){_classCallCheck(this,EmojiPreview);this.events=events;}_createClass(EmojiPreview,[{key:"render",value:function render(){var _this=this;var preview=createElement('div',CLASS_PREVIEW);this.emoji=createElement('div',CLASS_PREVIEW_EMOJI);preview.appendChild(this.emoji);this.name=createElement('div',CLASS_PREVIEW_NAME);preview.appendChild(this.name);this.events.on(SHOW_PREVIEW,function(emoji){return _this.showPreview(emoji);});this.events.on(HIDE_PREVIEW,function(){return _this.hidePreview();});return preview;}},{key:"showPreview",value:function showPreview(emoji){this.emoji.innerHTML=emoji.e;this.name.innerHTML=getEmojiName(emoji);}},{key:"hidePreview",value:function hidePreview(){this.emoji.innerHTML='';this.name.innerHTML='';}}]);return EmojiPreview;}();

  function _classCallCheck$1(instance,Constructor){if(!(instance instanceof Constructor)){throw new TypeError("Cannot call a class as a function");}}function _defineProperties$1(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||false;descriptor.configurable=true;if("value"in descriptor)descriptor.writable=true;Object.defineProperty(target,descriptor.key,descriptor);}}function _createClass$1(Constructor,protoProps,staticProps){if(protoProps)_defineProperties$1(Constructor.prototype,protoProps);if(staticProps)_defineProperties$1(Constructor,staticProps);return Constructor;}function _defineProperty$1(obj,key,value){if(key in obj){Object.defineProperty(obj,key,{value:value,enumerable:true,configurable:true,writable:true});}else{obj[key]=value;}return obj;}function _objectSpread(target){for(var i=1;i<arguments.length;i++){var source=arguments[i]!=null?arguments[i]:{};var ownKeys=Object.keys(source);if(typeof Object.getOwnPropertySymbols==='function'){ownKeys=ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function(sym){return Object.getOwnPropertyDescriptor(source,sym).enumerable;}));}ownKeys.forEach(function(key){_defineProperty$1(target,key,source[key]);});}return target;}function _slicedToArray(arr,i){return _arrayWithHoles(arr)||_iterableToArrayLimit(arr,i)||_nonIterableRest();}function _arrayWithHoles(arr){if(Array.isArray(arr))return arr;}function _iterableToArrayLimit(arr,i){var _arr=[];var _n=true;var _d=false;var _e=undefined;try{for(var _i=arr[Symbol.iterator](),_s;!(_n=(_s=_i.next()).done);_n=true){_arr.push(_s.value);if(i&&_arr.length===i)break;}}catch(err){_d=true;_e=err;}finally{try{if(!_n&&_i["return"]!=null)_i["return"]();}finally{if(_d)throw _e;}}return _arr;}function _nonIterableRest(){throw new TypeError("Invalid attempt to destructure non-iterable instance");}var noop=function noop(){};var _WINDOW={};var _DOCUMENT={};var _MUTATION_OBSERVER=null;var _PERFORMANCE={mark:noop,measure:noop};try{if(typeof window!=='undefined')_WINDOW=window;if(typeof document!=='undefined')_DOCUMENT=document;if(typeof MutationObserver!=='undefined')_MUTATION_OBSERVER=MutationObserver;if(typeof performance!=='undefined')_PERFORMANCE=performance;}catch(e){}var _ref=_WINDOW.navigator||{},_ref$userAgent=_ref.userAgent,userAgent=_ref$userAgent===void 0?'':_ref$userAgent;var WINDOW=_WINDOW;var DOCUMENT=_DOCUMENT;var PERFORMANCE=_PERFORMANCE;var IS_BROWSER=!!WINDOW.document;var IS_DOM=!!DOCUMENT.documentElement&&!!DOCUMENT.head&&typeof DOCUMENT.addEventListener==='function'&&typeof DOCUMENT.createElement==='function';var IS_IE=~userAgent.indexOf('MSIE')||~userAgent.indexOf('Trident/');var NAMESPACE_IDENTIFIER='___FONT_AWESOME___';var DEFAULT_FAMILY_PREFIX='fa';var DEFAULT_REPLACEMENT_CLASS='svg-inline--fa';var DATA_FA_I2SVG='data-fa-i2svg';var PRODUCTION=function(){try{return process.env.NODE_ENV==='production';}catch(e){return false;}}();var DUOTONE_CLASSES={GROUP:'group',SWAP_OPACITY:'swap-opacity',PRIMARY:'primary',SECONDARY:'secondary'};var initial=WINDOW.FontAwesomeConfig||{};function getAttrConfig(attr){var element=DOCUMENT.querySelector('script['+attr+']');if(element){return element.getAttribute(attr);}}function coerce(val){// Getting an empty string will occur if the attribute is set on the HTML tag but without a value
  // We'll assume that this is an indication that it should be toggled to true
  // For example <script data-search-pseudo-elements src="..."></script>
  if(val==='')return true;if(val==='false')return false;if(val==='true')return true;return val;}if(DOCUMENT&&typeof DOCUMENT.querySelector==='function'){var attrs=[['data-family-prefix','familyPrefix'],['data-replacement-class','replacementClass'],['data-auto-replace-svg','autoReplaceSvg'],['data-auto-add-css','autoAddCss'],['data-auto-a11y','autoA11y'],['data-search-pseudo-elements','searchPseudoElements'],['data-observe-mutations','observeMutations'],['data-mutate-approach','mutateApproach'],['data-keep-original-source','keepOriginalSource'],['data-measure-performance','measurePerformance'],['data-show-missing-icons','showMissingIcons']];attrs.forEach(function(_ref){var _ref2=_slicedToArray(_ref,2),attr=_ref2[0],key=_ref2[1];var val=coerce(getAttrConfig(attr));if(val!==undefined&&val!==null){initial[key]=val;}});}var _default={familyPrefix:DEFAULT_FAMILY_PREFIX,replacementClass:DEFAULT_REPLACEMENT_CLASS,autoReplaceSvg:true,autoAddCss:false,autoA11y:true,searchPseudoElements:false,observeMutations:true,mutateApproach:'async',keepOriginalSource:true,measurePerformance:false,showMissingIcons:true};var _config=_objectSpread({},_default,initial);if(!_config.autoReplaceSvg)_config.observeMutations=false;var config=_objectSpread({},_config);WINDOW.FontAwesomeConfig=config;var w=WINDOW||{};if(!w[NAMESPACE_IDENTIFIER])w[NAMESPACE_IDENTIFIER]={};if(!w[NAMESPACE_IDENTIFIER].styles)w[NAMESPACE_IDENTIFIER].styles={};if(!w[NAMESPACE_IDENTIFIER].hooks)w[NAMESPACE_IDENTIFIER].hooks={};if(!w[NAMESPACE_IDENTIFIER].shims)w[NAMESPACE_IDENTIFIER].shims=[];var namespace=w[NAMESPACE_IDENTIFIER];var functions=[];var listener=function listener(){DOCUMENT.removeEventListener('DOMContentLoaded',listener);loaded=1;functions.map(function(fn){return fn();});};var loaded=false;if(IS_DOM){loaded=(DOCUMENT.documentElement.doScroll?/^loaded|^c/:/^loaded|^i|^c/).test(DOCUMENT.readyState);if(!loaded)DOCUMENT.addEventListener('DOMContentLoaded',listener);}var isNode=typeof global!=='undefined'&&typeof global.process!=='undefined'&&typeof global.process.emit==='function';var meaninglessTransform={size:16,x:0,y:0,rotate:0,flipX:false,flipY:false};function insertCss(css){if(!css||!IS_DOM){return;}var style=DOCUMENT.createElement('style');style.setAttribute('type','text/css');style.innerHTML=css;var headChildren=DOCUMENT.head.childNodes;var beforeChild=null;for(var i=headChildren.length-1;i>-1;i--){var child=headChildren[i];var tagName=(child.tagName||'').toUpperCase();if(['STYLE','LINK'].indexOf(tagName)>-1){beforeChild=child;}}DOCUMENT.head.insertBefore(style,beforeChild);return css;}var idPool='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';function nextUniqueId(){var size=12;var id='';while(size-->0){id+=idPool[Math.random()*62|0];}return id;}function htmlEscape(str){return "".concat(str).replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/'/g,'&#39;').replace(/</g,'&lt;').replace(/>/g,'&gt;');}function joinAttributes(attributes){return Object.keys(attributes||{}).reduce(function(acc,attributeName){return acc+"".concat(attributeName,"=\"").concat(htmlEscape(attributes[attributeName]),"\" ");},'').trim();}function joinStyles(styles){return Object.keys(styles||{}).reduce(function(acc,styleName){return acc+"".concat(styleName,": ").concat(styles[styleName],";");},'');}function transformIsMeaningful(transform){return transform.size!==meaninglessTransform.size||transform.x!==meaninglessTransform.x||transform.y!==meaninglessTransform.y||transform.rotate!==meaninglessTransform.rotate||transform.flipX||transform.flipY;}function transformForSvg(_ref){var transform=_ref.transform,containerWidth=_ref.containerWidth,iconWidth=_ref.iconWidth;var outer={transform:"translate(".concat(containerWidth/2," 256)")};var innerTranslate="translate(".concat(transform.x*32,", ").concat(transform.y*32,") ");var innerScale="scale(".concat(transform.size/16*(transform.flipX?-1:1),", ").concat(transform.size/16*(transform.flipY?-1:1),") ");var innerRotate="rotate(".concat(transform.rotate," 0 0)");var inner={transform:"".concat(innerTranslate," ").concat(innerScale," ").concat(innerRotate)};var path={transform:"translate(".concat(iconWidth/2*-1," -256)")};return {outer:outer,inner:inner,path:path};}var ALL_SPACE={x:0,y:0,width:'100%',height:'100%'};function fillBlack(abstract){var force=arguments.length>1&&arguments[1]!==undefined?arguments[1]:true;if(abstract.attributes&&(abstract.attributes.fill||force)){abstract.attributes.fill='black';}return abstract;}function deGroup(abstract){if(abstract.tag==='g'){return abstract.children;}else{return [abstract];}}function makeIconMasking(_ref){var children=_ref.children,attributes=_ref.attributes,main=_ref.main,mask=_ref.mask,transform=_ref.transform;var mainWidth=main.width,mainPath=main.icon;var maskWidth=mask.width,maskPath=mask.icon;var trans=transformForSvg({transform:transform,containerWidth:maskWidth,iconWidth:mainWidth});var maskRect={tag:'rect',attributes:_objectSpread({},ALL_SPACE,{fill:'white'})};var maskInnerGroupChildrenMixin=mainPath.children?{children:mainPath.children.map(fillBlack)}:{};var maskInnerGroup={tag:'g',attributes:_objectSpread({},trans.inner),children:[fillBlack(_objectSpread({tag:mainPath.tag,attributes:_objectSpread({},mainPath.attributes,trans.path)},maskInnerGroupChildrenMixin))]};var maskOuterGroup={tag:'g',attributes:_objectSpread({},trans.outer),children:[maskInnerGroup]};var maskId="mask-".concat(nextUniqueId());var clipId="clip-".concat(nextUniqueId());var maskTag={tag:'mask',attributes:_objectSpread({},ALL_SPACE,{id:maskId,maskUnits:'userSpaceOnUse',maskContentUnits:'userSpaceOnUse'}),children:[maskRect,maskOuterGroup]};var defs={tag:'defs',children:[{tag:'clipPath',attributes:{id:clipId},children:deGroup(maskPath)},maskTag]};children.push(defs,{tag:'rect',attributes:_objectSpread({fill:'currentColor','clip-path':"url(#".concat(clipId,")"),mask:"url(#".concat(maskId,")")},ALL_SPACE)});return {children:children,attributes:attributes};}function makeIconStandard(_ref){var children=_ref.children,attributes=_ref.attributes,main=_ref.main,transform=_ref.transform,styles=_ref.styles;var styleString=joinStyles(styles);if(styleString.length>0){attributes['style']=styleString;}if(transformIsMeaningful(transform)){var trans=transformForSvg({transform:transform,containerWidth:main.width,iconWidth:main.width});children.push({tag:'g',attributes:_objectSpread({},trans.outer),children:[{tag:'g',attributes:_objectSpread({},trans.inner),children:[{tag:main.icon.tag,children:main.icon.children,attributes:_objectSpread({},main.icon.attributes,trans.path)}]}]});}else{children.push(main.icon);}return {children:children,attributes:attributes};}function asIcon(_ref){var children=_ref.children,main=_ref.main,mask=_ref.mask,attributes=_ref.attributes,styles=_ref.styles,transform=_ref.transform;if(transformIsMeaningful(transform)&&main.found&&!mask.found){var width=main.width,height=main.height;var offset={x:width/height/2,y:0.5};attributes['style']=joinStyles(_objectSpread({},styles,{'transform-origin':"".concat(offset.x+transform.x/16,"em ").concat(offset.y+transform.y/16,"em")}));}return [{tag:'svg',attributes:attributes,children:children}];}function asSymbol(_ref){var prefix=_ref.prefix,iconName=_ref.iconName,children=_ref.children,attributes=_ref.attributes,symbol=_ref.symbol;var id=symbol===true?"".concat(prefix,"-").concat(config.familyPrefix,"-").concat(iconName):symbol;return [{tag:'svg',attributes:{style:'display: none;'},children:[{tag:'symbol',attributes:_objectSpread({},attributes,{id:id}),children:children}]}];}function makeInlineSvgAbstract(params){var _params$icons=params.icons,main=_params$icons.main,mask=_params$icons.mask,prefix=params.prefix,iconName=params.iconName,transform=params.transform,symbol=params.symbol,title=params.title,extra=params.extra,_params$watchable=params.watchable,watchable=_params$watchable===void 0?false:_params$watchable;var _ref=mask.found?mask:main,width=_ref.width,height=_ref.height;var widthClass="fa-w-".concat(Math.ceil(width/height*16));var attrClass=[config.replacementClass,iconName?"".concat(config.familyPrefix,"-").concat(iconName):'',widthClass].filter(function(c){return extra.classes.indexOf(c)===-1;}).concat(extra.classes).join(' ');var content={children:[],attributes:_objectSpread({},extra.attributes,{'data-prefix':prefix,'data-icon':iconName,'class':attrClass,'role':extra.attributes.role||'img','xmlns':'http://www.w3.org/2000/svg','viewBox':"0 0 ".concat(width," ").concat(height)})};if(watchable){content.attributes[DATA_FA_I2SVG]='';}if(title)content.children.push({tag:'title',attributes:{id:content.attributes['aria-labelledby']||"title-".concat(nextUniqueId())},children:[title]});var args=_objectSpread({},content,{prefix:prefix,iconName:iconName,main:main,mask:mask,transform:transform,symbol:symbol,styles:extra.styles});var _ref2=mask.found&&main.found?makeIconMasking(args):makeIconStandard(args),children=_ref2.children,attributes=_ref2.attributes;args.children=children;args.attributes=attributes;if(symbol){return asSymbol(args);}else{return asIcon(args);}}var noop$1=function noop(){};var p=config.measurePerformance&&PERFORMANCE&&PERFORMANCE.mark&&PERFORMANCE.measure?PERFORMANCE:{mark:noop$1,measure:noop$1};/**
   * Internal helper to bind a function known to have 4 arguments
   * to a given context.
   */var bindInternal4=function bindInternal4(func,thisContext){return function(a,b,c,d){return func.call(thisContext,a,b,c,d);};};/**
   * # Reduce
   *
   * A fast object `.reduce()` implementation.
   *
   * @param  {Object}   subject      The object to reduce over.
   * @param  {Function} fn           The reducer function.
   * @param  {mixed}    initialValue The initial value for the reducer, defaults to subject[0].
   * @param  {Object}   thisContext  The context for the reducer.
   * @return {mixed}                 The final result.
   */var reduce=function fastReduceObject(subject,fn,initialValue,thisContext){var keys=Object.keys(subject),length=keys.length,iterator=thisContext!==undefined?bindInternal4(fn,thisContext):fn,i,key,result;if(initialValue===undefined){i=1;result=subject[keys[0]];}else{i=0;result=initialValue;}for(;i<length;i++){key=keys[i];result=iterator(result,subject[key],key,subject);}return result;};function defineIcons(prefix,icons){var params=arguments.length>2&&arguments[2]!==undefined?arguments[2]:{};var _params$skipHooks=params.skipHooks,skipHooks=_params$skipHooks===void 0?false:_params$skipHooks;var normalized=Object.keys(icons).reduce(function(acc,iconName){var icon=icons[iconName];var expanded=!!icon.icon;if(expanded){acc[icon.iconName]=icon.icon;}else{acc[iconName]=icon;}return acc;},{});if(typeof namespace.hooks.addPack==='function'&&!skipHooks){namespace.hooks.addPack(prefix,normalized);}else{namespace.styles[prefix]=_objectSpread({},namespace.styles[prefix]||{},normalized);}/**
     * Font Awesome 4 used the prefix of `fa` for all icons. With the introduction
     * of new styles we needed to differentiate between them. Prefix `fa` is now an alias
     * for `fas` so we'll easy the upgrade process for our users by automatically defining
     * this as well.
     */if(prefix==='fas'){defineIcons('fa',icons);}}var styles=namespace.styles,shims=namespace.shims;var _byUnicode={};var _byLigature={};var _byOldName={};var build=function build(){var lookup=function lookup(reducer){return reduce(styles,function(o,style,prefix){o[prefix]=reduce(style,reducer,{});return o;},{});};_byUnicode=lookup(function(acc,icon,iconName){if(icon[3]){acc[icon[3]]=iconName;}return acc;});_byLigature=lookup(function(acc,icon,iconName){var ligatures=icon[2];acc[iconName]=iconName;ligatures.forEach(function(ligature){acc[ligature]=iconName;});return acc;});var hasRegular='far'in styles;_byOldName=reduce(shims,function(acc,shim){var oldName=shim[0];var prefix=shim[1];var iconName=shim[2];if(prefix==='far'&&!hasRegular){prefix='fas';}acc[oldName]={prefix:prefix,iconName:iconName};return acc;},{});};build();var styles$1=namespace.styles;function iconFromMapping(mapping,prefix,iconName){if(mapping&&mapping[prefix]&&mapping[prefix][iconName]){return {prefix:prefix,iconName:iconName,icon:mapping[prefix][iconName]};}}function toHtml(abstractNodes){var tag=abstractNodes.tag,_abstractNodes$attrib=abstractNodes.attributes,attributes=_abstractNodes$attrib===void 0?{}:_abstractNodes$attrib,_abstractNodes$childr=abstractNodes.children,children=_abstractNodes$childr===void 0?[]:_abstractNodes$childr;if(typeof abstractNodes==='string'){return htmlEscape(abstractNodes);}else{return "<".concat(tag," ").concat(joinAttributes(attributes),">").concat(children.map(toHtml).join(''),"</").concat(tag,">");}}function MissingIcon(error){this.name='MissingIcon';this.message=error||'Icon unavailable';this.stack=new Error().stack;}MissingIcon.prototype=Object.create(Error.prototype);MissingIcon.prototype.constructor=MissingIcon;var FILL={fill:'currentColor'};var ANIMATION_BASE={attributeType:'XML',repeatCount:'indefinite',dur:'2s'};var RING={tag:'path',attributes:_objectSpread({},FILL,{d:'M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z'})};var OPACITY_ANIMATE=_objectSpread({},ANIMATION_BASE,{attributeName:'opacity'});var DOT={tag:'circle',attributes:_objectSpread({},FILL,{cx:'256',cy:'364',r:'28'}),children:[{tag:'animate',attributes:_objectSpread({},ANIMATION_BASE,{attributeName:'r',values:'28;14;28;28;14;28;'})},{tag:'animate',attributes:_objectSpread({},OPACITY_ANIMATE,{values:'1;0;1;1;0;1;'})}]};var QUESTION={tag:'path',attributes:_objectSpread({},FILL,{opacity:'1',d:'M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z'}),children:[{tag:'animate',attributes:_objectSpread({},OPACITY_ANIMATE,{values:'1;0;0;0;0;1;'})}]};var EXCLAMATION={tag:'path',attributes:_objectSpread({},FILL,{opacity:'0',d:'M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z'}),children:[{tag:'animate',attributes:_objectSpread({},OPACITY_ANIMATE,{values:'0;0;1;1;0;0;'})}]};var styles$2=namespace.styles;function asFoundIcon(icon){var width=icon[0];var height=icon[1];var _icon$slice=icon.slice(4),_icon$slice2=_slicedToArray(_icon$slice,1),vectorData=_icon$slice2[0];var element=null;if(Array.isArray(vectorData)){element={tag:'g',attributes:{class:"".concat(config.familyPrefix,"-").concat(DUOTONE_CLASSES.GROUP)},children:[{tag:'path',attributes:{class:"".concat(config.familyPrefix,"-").concat(DUOTONE_CLASSES.SECONDARY),fill:'currentColor',d:vectorData[0]}},{tag:'path',attributes:{class:"".concat(config.familyPrefix,"-").concat(DUOTONE_CLASSES.PRIMARY),fill:'currentColor',d:vectorData[1]}}]};}else{element={tag:'path',attributes:{fill:'currentColor',d:vectorData}};}return {found:true,width:width,height:height,icon:element};}var styles$3=namespace.styles;var baseStyles="svg:not(:root).svg-inline--fa {\n  overflow: visible;\n}\n\n.svg-inline--fa {\n  display: inline-block;\n  font-size: inherit;\n  height: 1em;\n  overflow: visible;\n  vertical-align: -0.125em;\n}\n.svg-inline--fa.fa-lg {\n  vertical-align: -0.225em;\n}\n.svg-inline--fa.fa-w-1 {\n  width: 0.0625em;\n}\n.svg-inline--fa.fa-w-2 {\n  width: 0.125em;\n}\n.svg-inline--fa.fa-w-3 {\n  width: 0.1875em;\n}\n.svg-inline--fa.fa-w-4 {\n  width: 0.25em;\n}\n.svg-inline--fa.fa-w-5 {\n  width: 0.3125em;\n}\n.svg-inline--fa.fa-w-6 {\n  width: 0.375em;\n}\n.svg-inline--fa.fa-w-7 {\n  width: 0.4375em;\n}\n.svg-inline--fa.fa-w-8 {\n  width: 0.5em;\n}\n.svg-inline--fa.fa-w-9 {\n  width: 0.5625em;\n}\n.svg-inline--fa.fa-w-10 {\n  width: 0.625em;\n}\n.svg-inline--fa.fa-w-11 {\n  width: 0.6875em;\n}\n.svg-inline--fa.fa-w-12 {\n  width: 0.75em;\n}\n.svg-inline--fa.fa-w-13 {\n  width: 0.8125em;\n}\n.svg-inline--fa.fa-w-14 {\n  width: 0.875em;\n}\n.svg-inline--fa.fa-w-15 {\n  width: 0.9375em;\n}\n.svg-inline--fa.fa-w-16 {\n  width: 1em;\n}\n.svg-inline--fa.fa-w-17 {\n  width: 1.0625em;\n}\n.svg-inline--fa.fa-w-18 {\n  width: 1.125em;\n}\n.svg-inline--fa.fa-w-19 {\n  width: 1.1875em;\n}\n.svg-inline--fa.fa-w-20 {\n  width: 1.25em;\n}\n.svg-inline--fa.fa-pull-left {\n  margin-right: 0.3em;\n  width: auto;\n}\n.svg-inline--fa.fa-pull-right {\n  margin-left: 0.3em;\n  width: auto;\n}\n.svg-inline--fa.fa-border {\n  height: 1.5em;\n}\n.svg-inline--fa.fa-li {\n  width: 2em;\n}\n.svg-inline--fa.fa-fw {\n  width: 1.25em;\n}\n\n.fa-layers svg.svg-inline--fa {\n  bottom: 0;\n  left: 0;\n  margin: auto;\n  position: absolute;\n  right: 0;\n  top: 0;\n}\n\n.fa-layers {\n  display: inline-block;\n  height: 1em;\n  position: relative;\n  text-align: center;\n  vertical-align: -0.125em;\n  width: 1em;\n}\n.fa-layers svg.svg-inline--fa {\n  -webkit-transform-origin: center center;\n          transform-origin: center center;\n}\n\n.fa-layers-counter, .fa-layers-text {\n  display: inline-block;\n  position: absolute;\n  text-align: center;\n}\n\n.fa-layers-text {\n  left: 50%;\n  top: 50%;\n  -webkit-transform: translate(-50%, -50%);\n          transform: translate(-50%, -50%);\n  -webkit-transform-origin: center center;\n          transform-origin: center center;\n}\n\n.fa-layers-counter {\n  background-color: #ff253a;\n  border-radius: 1em;\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n  color: #fff;\n  height: 1.5em;\n  line-height: 1;\n  max-width: 5em;\n  min-width: 1.5em;\n  overflow: hidden;\n  padding: 0.25em;\n  right: 0;\n  text-overflow: ellipsis;\n  top: 0;\n  -webkit-transform: scale(0.25);\n          transform: scale(0.25);\n  -webkit-transform-origin: top right;\n          transform-origin: top right;\n}\n\n.fa-layers-bottom-right {\n  bottom: 0;\n  right: 0;\n  top: auto;\n  -webkit-transform: scale(0.25);\n          transform: scale(0.25);\n  -webkit-transform-origin: bottom right;\n          transform-origin: bottom right;\n}\n\n.fa-layers-bottom-left {\n  bottom: 0;\n  left: 0;\n  right: auto;\n  top: auto;\n  -webkit-transform: scale(0.25);\n          transform: scale(0.25);\n  -webkit-transform-origin: bottom left;\n          transform-origin: bottom left;\n}\n\n.fa-layers-top-right {\n  right: 0;\n  top: 0;\n  -webkit-transform: scale(0.25);\n          transform: scale(0.25);\n  -webkit-transform-origin: top right;\n          transform-origin: top right;\n}\n\n.fa-layers-top-left {\n  left: 0;\n  right: auto;\n  top: 0;\n  -webkit-transform: scale(0.25);\n          transform: scale(0.25);\n  -webkit-transform-origin: top left;\n          transform-origin: top left;\n}\n\n.fa-lg {\n  font-size: 1.3333333333em;\n  line-height: 0.75em;\n  vertical-align: -0.0667em;\n}\n\n.fa-xs {\n  font-size: 0.75em;\n}\n\n.fa-sm {\n  font-size: 0.875em;\n}\n\n.fa-1x {\n  font-size: 1em;\n}\n\n.fa-2x {\n  font-size: 2em;\n}\n\n.fa-3x {\n  font-size: 3em;\n}\n\n.fa-4x {\n  font-size: 4em;\n}\n\n.fa-5x {\n  font-size: 5em;\n}\n\n.fa-6x {\n  font-size: 6em;\n}\n\n.fa-7x {\n  font-size: 7em;\n}\n\n.fa-8x {\n  font-size: 8em;\n}\n\n.fa-9x {\n  font-size: 9em;\n}\n\n.fa-10x {\n  font-size: 10em;\n}\n\n.fa-fw {\n  text-align: center;\n  width: 1.25em;\n}\n\n.fa-ul {\n  list-style-type: none;\n  margin-left: 2.5em;\n  padding-left: 0;\n}\n.fa-ul > li {\n  position: relative;\n}\n\n.fa-li {\n  left: -2em;\n  position: absolute;\n  text-align: center;\n  width: 2em;\n  line-height: inherit;\n}\n\n.fa-border {\n  border: solid 0.08em #eee;\n  border-radius: 0.1em;\n  padding: 0.2em 0.25em 0.15em;\n}\n\n.fa-pull-left {\n  float: left;\n}\n\n.fa-pull-right {\n  float: right;\n}\n\n.fa.fa-pull-left,\n.fas.fa-pull-left,\n.far.fa-pull-left,\n.fal.fa-pull-left,\n.fab.fa-pull-left {\n  margin-right: 0.3em;\n}\n.fa.fa-pull-right,\n.fas.fa-pull-right,\n.far.fa-pull-right,\n.fal.fa-pull-right,\n.fab.fa-pull-right {\n  margin-left: 0.3em;\n}\n\n.fa-spin {\n  -webkit-animation: fa-spin 2s infinite linear;\n          animation: fa-spin 2s infinite linear;\n}\n\n.fa-pulse {\n  -webkit-animation: fa-spin 1s infinite steps(8);\n          animation: fa-spin 1s infinite steps(8);\n}\n\n@-webkit-keyframes fa-spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n            transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(360deg);\n            transform: rotate(360deg);\n  }\n}\n\n@keyframes fa-spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n            transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(360deg);\n            transform: rotate(360deg);\n  }\n}\n.fa-rotate-90 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)\";\n  -webkit-transform: rotate(90deg);\n          transform: rotate(90deg);\n}\n\n.fa-rotate-180 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)\";\n  -webkit-transform: rotate(180deg);\n          transform: rotate(180deg);\n}\n\n.fa-rotate-270 {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)\";\n  -webkit-transform: rotate(270deg);\n          transform: rotate(270deg);\n}\n\n.fa-flip-horizontal {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)\";\n  -webkit-transform: scale(-1, 1);\n          transform: scale(-1, 1);\n}\n\n.fa-flip-vertical {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";\n  -webkit-transform: scale(1, -1);\n          transform: scale(1, -1);\n}\n\n.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {\n  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";\n  -webkit-transform: scale(-1, -1);\n          transform: scale(-1, -1);\n}\n\n:root .fa-rotate-90,\n:root .fa-rotate-180,\n:root .fa-rotate-270,\n:root .fa-flip-horizontal,\n:root .fa-flip-vertical,\n:root .fa-flip-both {\n  -webkit-filter: none;\n          filter: none;\n}\n\n.fa-stack {\n  display: inline-block;\n  height: 2em;\n  position: relative;\n  width: 2.5em;\n}\n\n.fa-stack-1x,\n.fa-stack-2x {\n  bottom: 0;\n  left: 0;\n  margin: auto;\n  position: absolute;\n  right: 0;\n  top: 0;\n}\n\n.svg-inline--fa.fa-stack-1x {\n  height: 1em;\n  width: 1.25em;\n}\n.svg-inline--fa.fa-stack-2x {\n  height: 2em;\n  width: 2.5em;\n}\n\n.fa-inverse {\n  color: #fff;\n}\n\n.sr-only {\n  border: 0;\n  clip: rect(0, 0, 0, 0);\n  height: 1px;\n  margin: -1px;\n  overflow: hidden;\n  padding: 0;\n  position: absolute;\n  width: 1px;\n}\n\n.sr-only-focusable:active, .sr-only-focusable:focus {\n  clip: auto;\n  height: auto;\n  margin: 0;\n  overflow: visible;\n  position: static;\n  width: auto;\n}\n\n.svg-inline--fa .fa-primary {\n  fill: var(--fa-primary-color, currentColor);\n  opacity: 1;\n  opacity: var(--fa-primary-opacity, 1);\n}\n\n.svg-inline--fa .fa-secondary {\n  fill: var(--fa-secondary-color, currentColor);\n  opacity: 0.4;\n  opacity: var(--fa-secondary-opacity, 0.4);\n}\n\n.svg-inline--fa.fa-swap-opacity .fa-primary {\n  opacity: 0.4;\n  opacity: var(--fa-secondary-opacity, 0.4);\n}\n\n.svg-inline--fa.fa-swap-opacity .fa-secondary {\n  opacity: 1;\n  opacity: var(--fa-primary-opacity, 1);\n}\n\n.svg-inline--fa mask .fa-primary,\n.svg-inline--fa mask .fa-secondary {\n  fill: black;\n}\n\n.fad.fa-inverse {\n  color: #fff;\n}";function css$1(){var dfp=DEFAULT_FAMILY_PREFIX;var drc=DEFAULT_REPLACEMENT_CLASS;var fp=config.familyPrefix;var rc=config.replacementClass;var s=baseStyles;if(fp!==dfp||rc!==drc){var dPatt=new RegExp("\\.".concat(dfp,"\\-"),'g');var customPropPatt=new RegExp("\\--".concat(dfp,"\\-"),'g');var rPatt=new RegExp("\\.".concat(drc),'g');s=s.replace(dPatt,".".concat(fp,"-")).replace(customPropPatt,"--".concat(fp,"-")).replace(rPatt,".".concat(rc));}return s;}var Library=/*#__PURE__*/function(){function Library(){_classCallCheck$1(this,Library);this.definitions={};}_createClass$1(Library,[{key:"add",value:function add(){var _this=this;for(var _len=arguments.length,definitions=new Array(_len),_key=0;_key<_len;_key++){definitions[_key]=arguments[_key];}var additions=definitions.reduce(this._pullDefinitions,{});Object.keys(additions).forEach(function(key){_this.definitions[key]=_objectSpread({},_this.definitions[key]||{},additions[key]);defineIcons(key,additions[key]);build();});}},{key:"reset",value:function reset(){this.definitions={};}},{key:"_pullDefinitions",value:function _pullDefinitions(additions,definition){var normalized=definition.prefix&&definition.iconName&&definition.icon?{0:definition}:definition;Object.keys(normalized).map(function(key){var _normalized$key=normalized[key],prefix=_normalized$key.prefix,iconName=_normalized$key.iconName,icon=_normalized$key.icon;if(!additions[prefix])additions[prefix]={};additions[prefix][iconName]=icon;});return additions;}}]);return Library;}();function ensureCss(){if(config.autoAddCss&&!_cssInserted){insertCss(css$1());_cssInserted=true;}}function apiObject(val,abstractCreator){Object.defineProperty(val,'abstract',{get:abstractCreator});Object.defineProperty(val,'html',{get:function get(){return val.abstract.map(function(a){return toHtml(a);});}});Object.defineProperty(val,'node',{get:function get(){if(!IS_DOM)return;var container=DOCUMENT.createElement('div');container.innerHTML=val.html;return container.children;}});return val;}function findIconDefinition(iconLookup){var _iconLookup$prefix=iconLookup.prefix,prefix=_iconLookup$prefix===void 0?'fa':_iconLookup$prefix,iconName=iconLookup.iconName;if(!iconName)return;return iconFromMapping(library.definitions,prefix,iconName)||iconFromMapping(namespace.styles,prefix,iconName);}function resolveIcons(next){return function(maybeIconDefinition){var params=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};var iconDefinition=(maybeIconDefinition||{}).icon?maybeIconDefinition:findIconDefinition(maybeIconDefinition||{});var mask=params.mask;if(mask){mask=(mask||{}).icon?mask:findIconDefinition(mask||{});}return next(iconDefinition,_objectSpread({},params,{mask:mask}));};}var library=new Library();var _cssInserted=false;var icon=resolveIcons(function(iconDefinition){var params=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};var _params$transform=params.transform,transform=_params$transform===void 0?meaninglessTransform:_params$transform,_params$symbol=params.symbol,symbol=_params$symbol===void 0?false:_params$symbol,_params$mask=params.mask,mask=_params$mask===void 0?null:_params$mask,_params$title=params.title,title=_params$title===void 0?null:_params$title,_params$classes=params.classes,classes=_params$classes===void 0?[]:_params$classes,_params$attributes=params.attributes,attributes=_params$attributes===void 0?{}:_params$attributes,_params$styles=params.styles,styles=_params$styles===void 0?{}:_params$styles;if(!iconDefinition)return;var prefix=iconDefinition.prefix,iconName=iconDefinition.iconName,icon=iconDefinition.icon;return apiObject(_objectSpread({type:'icon'},iconDefinition),function(){ensureCss();if(config.autoA11y){if(title){attributes['aria-labelledby']="".concat(config.replacementClass,"-title-").concat(nextUniqueId());}else{attributes['aria-hidden']='true';attributes['focusable']='false';}}return makeInlineSvgAbstract({icons:{main:asFoundIcon(icon),mask:mask?asFoundIcon(mask.icon):{found:false,width:null,height:null,icon:{}}},prefix:prefix,iconName:iconName,transform:_objectSpread({},meaninglessTransform,transform),symbol:symbol,title:title,extra:{attributes:attributes,styles:styles,classes:classes}});});});

  var faCat={prefix:'fas',iconName:'cat',icon:[512,512,[],"f6be","M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"]};var faCoffee={prefix:'fas',iconName:'coffee',icon:[640,512,[],"f0f4","M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"]};var faFutbol={prefix:'fas',iconName:'futbol',icon:[512,512,[],"f1e3","M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z"]};var faHistory={prefix:'fas',iconName:'history',icon:[512,512,[],"f1da","M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"]};var faMusic={prefix:'fas',iconName:'music',icon:[512,512,[],"f001","M511.99 32.01c0-21.71-21.1-37.01-41.6-30.51L150.4 96c-13.3 4.2-22.4 16.5-22.4 30.5v261.42c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64V214.31l256-75.02v184.63c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64l-.01-351.99z"]};var faSearch={prefix:'fas',iconName:'search',icon:[512,512,[],"f002","M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"]};var faTimes={prefix:'fas',iconName:'times',icon:[352,512,[],"f00d","M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"]};

  var faBuilding={prefix:'far',iconName:'building',icon:[448,512,[],"f1ad","M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"]};var faFlag={prefix:'far',iconName:'flag',icon:[512,512,[],"f024","M336.174 80c-49.132 0-93.305-32-161.913-32-31.301 0-58.303 6.482-80.721 15.168a48.04 48.04 0 0 0 2.142-20.727C93.067 19.575 74.167 1.594 51.201.104 23.242-1.71 0 20.431 0 48c0 17.764 9.657 33.262 24 41.562V496c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-83.443C109.869 395.28 143.259 384 199.826 384c49.132 0 93.305 32 161.913 32 58.479 0 101.972-22.617 128.548-39.981C503.846 367.161 512 352.051 512 335.855V95.937c0-34.459-35.264-57.768-66.904-44.117C409.193 67.309 371.641 80 336.174 80zM464 336c-21.783 15.412-60.824 32-102.261 32-59.945 0-102.002-32-161.913-32-43.361 0-96.379 9.403-127.826 24V128c21.784-15.412 60.824-32 102.261-32 59.945 0 102.002 32 161.913 32 43.271 0 96.32-17.366 127.826-32v240z"]};var faFrown={prefix:'far',iconName:'frown',icon:[496,512,[],"f119","M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160-64c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm-80 128c-40.2 0-78 17.7-103.8 48.6-8.5 10.2-7.1 25.3 3.1 33.8 10.2 8.4 25.3 7.1 33.8-3.1 16.6-19.9 41-31.4 66.9-31.4s50.3 11.4 66.9 31.4c8.1 9.7 23.1 11.9 33.8 3.1 10.2-8.5 11.5-23.6 3.1-33.8C326 321.7 288.2 304 248 304z"]};var faLightbulb={prefix:'far',iconName:'lightbulb',icon:[352,512,[],"f0eb","M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"]};var faSmile={prefix:'far',iconName:'smile',icon:[496,512,[],"f118","M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"]};

  library.add(faBuilding,faCat,faCoffee,faFlag,faFrown,faFutbol,faHistory,faLightbulb,faMusic,faSearch,faSmile,faTimes);var building=icon({prefix:'far',iconName:'building'}).html;var cat=icon({prefix:'fas',iconName:'cat'}).html;var coffee=icon({prefix:'fas',iconName:'coffee'}).html;var flag=icon({prefix:'far',iconName:'flag'}).html;var futbol=icon({prefix:'fas',iconName:'futbol'}).html;var frown=icon({prefix:'far',iconName:'frown'}).html;var history=icon({prefix:'fas',iconName:'history'}).html;var lightbulb=icon({prefix:'far',iconName:'lightbulb'}).html;var music=icon({prefix:'fas',iconName:'music'}).html;var search=icon({prefix:'fas',iconName:'search'}).html;var smile=icon({prefix:'far',iconName:'smile'}).html;var times=icon({prefix:'fas',iconName:'times'}).html;

  var LOCAL_STORAGE_KEY='emojiPicker.recent';function load(){return JSON.parse(localStorage.getItem(LOCAL_STORAGE_KEY))||[];}function save(emoji,options){var recents=load();var recent={e:emoji.e,n:getEmojiName(emoji),k:emoji.k||getEmojiName(emoji)};localStorage.setItem(LOCAL_STORAGE_KEY,JSON.stringify([recent].concat(_toConsumableArray(recents.filter(function(r){return r.k!==recent.k;}))).slice(0,options.recentsCount)));}

  var CLASS_EMOJI='emoji-picker__emoji';var Emoji=/*#__PURE__*/function(){function Emoji(emoji,showVariants,showPreview,events,options){_classCallCheck(this,Emoji);this.emoji=emoji;this.showVariants=showVariants;this.showPreview=showPreview;this.events=events;this.options=options;}_createClass(Emoji,[{key:"render",value:function render(){var _this=this;var emojiButton=createElement('button',CLASS_EMOJI);emojiButton.innerHTML=this.emoji.e;emojiButton.addEventListener('click',function(){return _this.onEmojiClick();});emojiButton.addEventListener('mouseover',function(){return _this.onEmojiHover();});emojiButton.addEventListener('mouseout',function(){return _this.onEmojiLeave();});return emojiButton;}},{key:"onEmojiClick",value:function onEmojiClick(){// TODO move this side effect out of Emoji, make the recent module listen for event
  if((!this.emoji.v||!this.showVariants||!this.options.showVariants)&&this.options.showRecents){save(this.emoji,this.options);}this.events.emit(EMOJI,{emoji:this.emoji,showVariants:this.showVariants});}},{key:"onEmojiHover",value:function onEmojiHover(){if(this.showPreview){this.events.emit(SHOW_PREVIEW,this.emoji);}}},{key:"onEmojiLeave",value:function onEmojiLeave(){if(this.showPreview){this.events.emit(HIDE_PREVIEW);}}}]);return Emoji;}();

  var CLASS_EMOJI_CONTAINER='emoji-picker__emojis';var EmojiContainer=/*#__PURE__*/function(){function EmojiContainer(emojis,showVariants,events,options){_classCallCheck(this,EmojiContainer);this.emojis=emojis;this.showVariants=showVariants;this.events=events;this.options=options;}_createClass(EmojiContainer,[{key:"render",value:function render(){var _this=this;var emojiContainer=createElement('div',CLASS_EMOJI_CONTAINER);this.emojis.forEach(function(emoji){return emojiContainer.appendChild(new Emoji(emoji,_this.showVariants,true,_this.events,_this.options).render());});return emojiContainer;}}]);return EmojiContainer;}();

  var CLASS_SEARCH_CONTAINER='emoji-picker__search-container';var CLASS_SEARCH_FIELD='emoji-picker__search form-control form-control-sm';var CLASS_SEARCH_ICON='emoji-picker__search-icon';var CLASS_NOT_FOUND='emoji-picker__search-not-found';var CLASS_NOT_FOUND_ICON='emoji-picker__search-not-found-icon';var Search=/*#__PURE__*/function(){function Search(events,i18n,options,emojiData,autoFocusSearch){_classCallCheck(this,Search);this.events=events;this.i18n=i18n;this.options=options;this.emojiData=emojiData;this.autoFocusSearch=autoFocusSearch;}_createClass(Search,[{key:"render",value:function render(){var _this=this;this.searchContainer=createElement('div',CLASS_SEARCH_CONTAINER);this.searchField=createElement('input',CLASS_SEARCH_FIELD);this.searchField.placeholder=this.i18n.search;this.searchContainer.appendChild(this.searchField);this.searchIcon=createElement('span',CLASS_SEARCH_ICON);this.searchIcon.innerHTML=search;this.searchIcon.addEventListener('click',function(event){return _this.onClearSearch(event);});this.searchContainer.appendChild(this.searchIcon);if(this.autoFocusSearch){setTimeout(function(){return _this.searchField.focus();});}this.searchField.addEventListener('keydown',function(event){return _this.onKeyDown(event);});this.searchField.addEventListener('keyup',function(){return _this.onKeyUp();});return this.searchContainer;}},{key:"onClearSearch",value:function onClearSearch(event){event.stopPropagation();if(this.searchField.value){this.searchField.value='';this.events.emit(SHOW_TABS);this.searchIcon.innerHTML=search;this.searchIcon.style.cursor='default';}}},{key:"onKeyDown",value:function onKeyDown(event){if(event.key==='Escape'&&this.searchField.value!==''){event.stopPropagation();this.searchField.value='';this.events.emit(SHOW_TABS);}}},{key:"onKeyUp",value:function onKeyUp(){var _this2=this;if(!this.searchField.value){this.searchIcon.innerHTML=search;this.searchIcon.style.cursor='default';this.events.emit(SHOW_TABS);}else{this.searchIcon.innerHTML=times;this.searchIcon.style.cursor='pointer';this.events.emit(HIDE_TABS);var searchResults=this.emojiData.filter(function(emoji){return emoji.n.filter(function(name){return name.toLowerCase().indexOf(_this2.searchField.value.toLowerCase())>=0;}).length;});this.events.emit(HIDE_PREVIEW);if(searchResults.length){this.events.emit(SHOW_SEARCH_RESULTS,new EmojiContainer(searchResults,true,this.events,this.options).render());}else{this.events.emit(SHOW_SEARCH_RESULTS,new NotFoundMessage(this.i18n.notFound).render());}}}}]);return Search;}();var NotFoundMessage=/*#__PURE__*/function(){function NotFoundMessage(message){_classCallCheck(this,NotFoundMessage);this.message=message;}_createClass(NotFoundMessage,[{key:"render",value:function render(){var container=createElement('div',CLASS_NOT_FOUND);var iconContainer=createElement('div',CLASS_NOT_FOUND_ICON);iconContainer.innerHTML=frown;container.appendChild(iconContainer);var messageContainer=createElement('h2');messageContainer.innerHTML=this.message;container.appendChild(messageContainer);return container;}}]);return NotFoundMessage;}();

  var i18n={search:'Search emojis...',categories:{recents:'Recent Emojis',smileys:'Smileys & People',animals:'Animals & Nature',food:'Food & Drink',activities:'Activities',travel:'Travel & Places',objects:'Objects',symbols:'Symbols',flags:'Flags'},notFound:'No emojis found'};

  var CLASS_ACTIVE_TAB='active';var CLASS_TABS_CONTAINER='emoji-picker__tabs-container';var CLASS_TABS='emoji-picker__tabs';var CLASS_TAB='emoji-picker__tab';var CLASS_TAB_BODY='emoji-picker__tab-body';var emojiCategories={};emojiData.forEach(function(emoji){var categoryList=emojiCategories[categories[emoji.c]];if(!categoryList){categoryList=emojiCategories[categories[emoji.c]]=[];}categoryList.push(emoji);});var categoryIcons={smileys:smile,animals:cat,food:coffee,activities:futbol,travel:building,objects:lightbulb,symbols:music,flags:flag};var Tabs=/*#__PURE__*/function(){function Tabs(events,i18n,options){_classCallCheck(this,Tabs);this.events=events;this.i18n=i18n;this.options=options;this.setActiveTab=this.setActiveTab.bind(this);}_createClass(Tabs,[{key:"setActiveTab",value:function setActiveTab(index){var animate=arguments.length>1&&arguments[1]!==undefined?arguments[1]:true;if(index===this.activeTab){return;}var currentActiveTab=this.activeTab;if(currentActiveTab>=0){this.tabs[currentActiveTab].setActive(false);var currentActiveTabBody=this.tabBodies[currentActiveTab].container;var newActiveTabBody=this.tabBodies[index].container;newActiveTabBody.querySelector('.emoji-picker__emojis').scrollTop=0;if(animate){if(index>currentActiveTab){this.transitionTabs(newActiveTabBody,currentActiveTabBody,25,-25);}else{this.transitionTabs(newActiveTabBody,currentActiveTabBody,-25,25);}}}this.activeTab=index;this.tabBodies[this.activeTab].setActive(true);this.tabs[this.activeTab].setActive(true);}},{key:"transitionTabs",value:function transitionTabs(newActiveTabBody,currentActiveTabBody,newTranslate,currentTranslate){requestAnimationFrame(function(){newActiveTabBody.style.transition='none';newActiveTabBody.style.transform="translateX(".concat(newTranslate,"rem)");requestAnimationFrame(function(){currentActiveTabBody.style.transform="translateX(".concat(currentTranslate,"rem)");newActiveTabBody.style.transition='transform 0.25s';requestAnimationFrame(function(){newActiveTabBody.style.transform='translateX(0)';});});});}},{key:"render",value:function render(){var tabsContainer=createElement('div',CLASS_TABS_CONTAINER);tabsContainer.appendChild(this.createTabs());tabsContainer.appendChild(this.createTabBodies());this.setActiveTab(this.options.showRecents?1:0,false);return tabsContainer;}},{key:"createTabs",value:function createTabs(){var _this=this;this.tabsList=createElement('ul',CLASS_TABS);this.tabs=Object.keys(categoryIcons).map(function(category,index){return new Tab(categoryIcons[category],_this.options.showRecents?index+1:index,_this.setActiveTab);});if(this.options.showRecents){var recentTab=new Tab(history,0,this.setActiveTab);this.tabs.splice(0,0,recentTab);}this.tabs.forEach(function(tab){return _this.tabsList.appendChild(tab.render());});return this.tabsList;}},{key:"createTabBodies",value:function createTabBodies(){var _this2=this;this.tabBodyContainer=createElement('div');this.tabBodies=Object.keys(categoryIcons).map(function(category,index){return new TabBody(_this2.i18n.categories[category]||i18n.categories[category],new EmojiContainer(emojiCategories[category],true,_this2.events,_this2.options).render(),_this2.options.showRecents?index+1:index);});if(this.options.showRecents){var recentTabBody=new TabBody(this.i18n.categories.recents||i18n.categories.recents,new EmojiContainer(load(),false,this.events,this.options).render(),0);this.tabBodies.splice(0,0,recentTabBody);this.events.on(EMOJI,function(){var newRecents=new TabBody(_this2.i18n.categories.recents||i18n.categories.recents,new EmojiContainer(load(),false,_this2.events,_this2.options).render(),0);setTimeout(function(){_this2.tabBodyContainer.replaceChild(newRecents.render(),_this2.tabBodyContainer.firstChild);_this2.tabBodies[0]=newRecents;if(_this2.activeTab===0){_this2.setActiveTab(0);}});});}this.tabBodies.forEach(function(tabBody){return _this2.tabBodyContainer.appendChild(tabBody.render());});return this.tabBodyContainer;}}]);return Tabs;}();var Tab=/*#__PURE__*/function(){function Tab(icon,index,setActiveTab){_classCallCheck(this,Tab);this.icon=icon;this.index=index;this.setActiveTab=setActiveTab;}_createClass(Tab,[{key:"render",value:function render(){var _this3=this;this.tab=createElement('li',CLASS_TAB);this.tab.innerHTML=this.icon;this.tab.addEventListener('click',function(){return _this3.setActiveTab(_this3.index);});return this.tab;}},{key:"setActive",value:function setActive(active){if(active){this.tab.classList.add(CLASS_ACTIVE_TAB);}else{this.tab.classList.remove(CLASS_ACTIVE_TAB);}}}]);return Tab;}();var TabBody=/*#__PURE__*/function(){function TabBody(category,content,index){_classCallCheck(this,TabBody);this.category=category;this.content=content;this.index=index;}_createClass(TabBody,[{key:"render",value:function render(){this.container=createElement('div',CLASS_TAB_BODY);var title=createElement('h2');title.innerHTML=this.category;this.container.appendChild(title);this.container.appendChild(this.content);return this.container;}},{key:"setActive",value:function setActive(active){if(active){this.container.classList.add(CLASS_ACTIVE_TAB);}else{this.container.classList.remove(CLASS_ACTIVE_TAB);}}}]);return TabBody;}();

  var CLASS_OVERLAY='emoji-picker__variant-overlay';var CLASS_POPUP='emoji-picker__variant-popup';var CLASS_CLOSE_BUTTON='emoji-picker__variant-popup-close-button';var VariantPopup=/*#__PURE__*/function(){function VariantPopup(events,emoji,options){_classCallCheck(this,VariantPopup);this.events=events;this.emoji=emoji;this.options=options;}_createClass(VariantPopup,[{key:"render",value:function render(){var _this=this;var popup=createElement('div',CLASS_POPUP);var overlay=createElement('div',CLASS_OVERLAY);overlay.addEventListener('click',function(event){event.stopPropagation();if(!popup.contains(event.target)){_this.events.emit(HIDE_VARIANT_POPUP);}});popup.appendChild(new Emoji(this.emoji,false,false,this.events,this.options).render());Object.keys(this.emoji.v).forEach(function(variant){popup.appendChild(new Emoji(_this.emoji.v[variant],false,false,_this.events,_this.options).render());});var closeButton=createElement('button',CLASS_CLOSE_BUTTON);closeButton.innerHTML=times;closeButton.addEventListener('click',function(event){event.stopPropagation();_this.events.emit(HIDE_VARIANT_POPUP);});popup.appendChild(closeButton);overlay.appendChild(popup);return overlay;}}]);return VariantPopup;}();

  var CLASS_PICKER='emoji-picker';var CLASS_PICKER_CONTENT='emoji-picker__content';var DEFAULT_OPTIONS={position:'right-start',autoHide:true,autoFocusSearch:true,showPreview:true,showSearch:true,showRecents:true,showVariants:true,recentsCount:50};var EmojiButton=/*#__PURE__*/function(){function EmojiButton(){var options=arguments.length>0&&arguments[0]!==undefined?arguments[0]:{};_classCallCheck(this,EmojiButton);this.pickerVisible=false;this.options=_objectSpread2({},DEFAULT_OPTIONS,{},options);if(!this.options.rootElement){this.options.rootElement=document.body;}this.i18n=_objectSpread2({},i18n,{},options.i18n);this.onDocumentClick=this.onDocumentClick.bind(this);this.onDocumentKeydown=this.onDocumentKeydown.bind(this);this.events=new tinyEmitter();this.publicEvents=new tinyEmitter();}_createClass(EmojiButton,[{key:"on",value:function on(event,callback){this.publicEvents.on(event,callback);}},{key:"off",value:function off(event,callback){this.publicEvents.off(event,callback);}},{key:"buildPicker",value:function buildPicker(){var _this=this;this.pickerEl=createElement('div',CLASS_PICKER);if(this.options.zIndex){this.pickerEl.style.zIndex=this.options.zIndex;}var pickerContent=createElement('div',CLASS_PICKER_CONTENT);if(this.options.showSearch){var searchContainer=new Search(this.events,this.i18n,this.options,emojiData,this.options.autoFocusSearch).render();this.pickerEl.appendChild(searchContainer);}this.pickerEl.appendChild(pickerContent);var tabs=new Tabs(this.events,this.i18n,this.options).render();pickerContent.appendChild(tabs);this.events.on(HIDE_TABS,function(){if(pickerContent.contains(tabs)){pickerContent.removeChild(tabs);}});this.events.on(SHOW_TABS,function(){if(!pickerContent.contains(tabs)){empty(pickerContent);pickerContent.appendChild(tabs);}});this.events.on(SHOW_SEARCH_RESULTS,function(searchResults){empty(pickerContent);searchResults.classList.add('search-results');pickerContent.appendChild(searchResults);});if(this.options.showPreview){this.pickerEl.appendChild(new EmojiPreview(this.events).render());}var variantPopup;this.events.on(EMOJI,function(_ref){var emoji=_ref.emoji,showVariants=_ref.showVariants;if(emoji.v&&showVariants&&_this.options.showVariants){variantPopup=new VariantPopup(_this.events,emoji,_this.options).render();_this.pickerEl.appendChild(variantPopup);}else{if(variantPopup&&variantPopup.parentNode===_this.pickerEl){_this.pickerEl.removeChild(variantPopup);}_this.publicEvents.emit('emoji',emoji.e);if(_this.options.autoHide){_this.hidePicker();}}});this.events.on(HIDE_VARIANT_POPUP,function(){_this.pickerEl.removeChild(variantPopup);variantPopup=null;});this.options.rootElement.appendChild(this.pickerEl);setTimeout(function(){document.addEventListener('click',_this.onDocumentClick);document.addEventListener('keydown',_this.onDocumentKeydown);});}},{key:"onDocumentClick",value:function onDocumentClick(event){if(!this.pickerEl.contains(event.target)){this.hidePicker();}}},{key:"hidePicker",value:function hidePicker(){var _this2=this;// this.pickerEl.style.opacity = 0;
  this.pickerEl.classList.remove('visible');this.pickerVisible=false;this.events.off(EMOJI);this.events.off(HIDE_VARIANT_POPUP);this.hideInProgress=true;setTimeout(function(){_this2.options.rootElement.removeChild(_this2.pickerEl);_this2.popper.destroy();_this2.pickerEl.style.transition='';_this2.hideInProgress=false;},500);document.removeEventListener('click',this.onDocumentClick);document.removeEventListener('keydown',this.onDocumentKeydown);}},{key:"showPicker",value:function showPicker(referenceEl){var options=arguments.length>1&&arguments[1]!==undefined?arguments[1]:{};if(this.hideInProgress){return;}this.pickerVisible=true;this.buildPicker();this.popper=new Popper(referenceEl,this.pickerEl,{placement:options.position||this.options.position});this.pickerEl.classList.add('visible');}},{key:"onDocumentKeydown",value:function onDocumentKeydown(event){if(event.key==='Escape'){this.hidePicker();}}}]);return EmojiButton;}();

  return EmojiButton;

}));
/**
 * SVGInjector v1.1.3 - Fast, caching, dynamic inline SVG DOM injection library
 * https://github.com/iconic/SVGInjector
 *
 * Copyright (c) 2014-2015 Waybury <hello@waybury.com>
 * @license MIT
 */
!function(t,e){"use strict";function r(t){t=t.split(" ");for(var e={},r=t.length,n=[];r--;)e.hasOwnProperty(t[r])||(e[t[r]]=1,n.unshift(t[r]));return n.join(" ")}var n="file:"===t.location.protocol,i=e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1"),o=Array.prototype.forEach||function(t,e){if(void 0===this||null===this||"function"!=typeof t)throw new TypeError;var r,n=this.length>>>0;for(r=0;n>r;++r)r in this&&t.call(e,this[r],r,this)},a={},l=0,s=[],u=[],c={},f=function(t){return t.cloneNode(!0)},p=function(t,e){u[t]=u[t]||[],u[t].push(e)},d=function(t){for(var e=0,r=u[t].length;r>e;e++)!function(e){setTimeout(function(){u[t][e](f(a[t]))},0)}(e)},v=function(e,r){if(void 0!==a[e])a[e]instanceof SVGSVGElement?r(f(a[e])):p(e,r);else{if(!t.XMLHttpRequest)return r("Browser does not support XMLHttpRequest"),!1;a[e]={},p(e,r);var i=new XMLHttpRequest;i.onreadystatechange=function(){if(4===i.readyState){if(404===i.status||null===i.responseXML)return r("Unable to load SVG file: "+e),n&&r("Note: SVG injection ajax calls do not work locally without adjusting security setting in your browser. Or consider using a local webserver."),r(),!1;if(!(200===i.status||n&&0===i.status))return r("There was a problem injecting the SVG: "+i.status+" "+i.statusText),!1;if(i.responseXML instanceof Document)a[e]=i.responseXML.documentElement;else if(DOMParser&&DOMParser instanceof Function){var t;try{var o=new DOMParser;t=o.parseFromString(i.responseText,"text/xml")}catch(l){t=void 0}if(!t||t.getElementsByTagName("parsererror").length)return r("Unable to parse SVG file: "+e),!1;a[e]=t.documentElement}d(e)}},i.open("GET",e),i.overrideMimeType&&i.overrideMimeType("text/xml"),i.send()}},h=function(e,n,a,u){var f=e.getAttribute("data-src")||e.getAttribute("src");if(!/\.svg/i.test(f))return void u("Attempted to inject a file with a non-svg extension: "+f);if(!i){var p=e.getAttribute("data-fallback")||e.getAttribute("data-png");return void(p?(e.setAttribute("src",p),u(null)):a?(e.setAttribute("src",a+"/"+f.split("/").pop().replace(".svg",".png")),u(null)):u("This browser does not support SVG and no PNG fallback was defined."))}-1===s.indexOf(e)&&(s.push(e),e.setAttribute("src",""),v(f,function(i){if("undefined"==typeof i||"string"==typeof i)return u(i),!1;var a=e.getAttribute("id");a&&i.setAttribute("id",a);var p=e.getAttribute("title");p&&i.setAttribute("title",p);var d=[].concat(i.getAttribute("class")||[],"injected-svg",e.getAttribute("class")||[]).join(" ");i.setAttribute("class",r(d));var v=e.getAttribute("style");v&&i.setAttribute("style",v);var h=[].filter.call(e.attributes,function(t){return/^data-\w[\w\-]*$/.test(t.name)});o.call(h,function(t){t.name&&t.value&&i.setAttribute(t.name,t.value)});var g,m,b,y,A,w={clipPath:["clip-path"],"color-profile":["color-profile"],cursor:["cursor"],filter:["filter"],linearGradient:["fill","stroke"],marker:["marker","marker-start","marker-mid","marker-end"],mask:["mask"],pattern:["fill","stroke"],radialGradient:["fill","stroke"]};Object.keys(w).forEach(function(t){g=t,b=w[t],m=i.querySelectorAll("defs "+g+"[id]");for(var e=0,r=m.length;r>e;e++){y=m[e].id,A=y+"-"+l;var n;o.call(b,function(t){n=i.querySelectorAll("["+t+'*="'+y+'"]');for(var e=0,r=n.length;r>e;e++)n[e].setAttribute(t,"url(#"+A+")")}),m[e].id=A}}),i.removeAttribute("xmlns:a");for(var x,S,k=i.querySelectorAll("script"),j=[],G=0,T=k.length;T>G;G++)S=k[G].getAttribute("type"),S&&"application/ecmascript"!==S&&"application/javascript"!==S||(x=k[G].innerText||k[G].textContent,j.push(x),i.removeChild(k[G]));if(j.length>0&&("always"===n||"once"===n&&!c[f])){for(var M=0,V=j.length;V>M;M++)new Function(j[M])(t);c[f]=!0}var E=i.querySelectorAll("style");o.call(E,function(t){t.textContent+=""}),e.parentNode.replaceChild(i,e),delete s[s.indexOf(e)],e=null,l++,u(i)}))},g=function(t,e,r){e=e||{};var n=e.evalScripts||"always",i=e.pngFallback||!1,a=e.each;if(void 0!==t.length){var l=0;o.call(t,function(e){h(e,n,i,function(e){a&&"function"==typeof a&&a(e),r&&t.length===++l&&r(l)})})}else t?h(t,n,i,function(e){a&&"function"==typeof a&&a(e),r&&r(1),t=null}):r&&r(0)};"object"==typeof module&&"object"==typeof module.exports?module.exports=exports=g:"function"==typeof define&&define.amd?define(function(){return g}):"object"==typeof t&&(t.SVGInjector=g)}(window,document);
//# sourceMappingURL=svg-injector.map.js
// zoom-vanilla.js - 2.0.6 (https://github.com/spinningarrow/zoom-vanilla.js)
+function(){"use strict";function e(e){var t=e.getBoundingClientRect(),n=window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop||0,o=window.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft||0;return{top:t.top+n,left:t.left+o}}var t=80,n=function(){function n(){var e=document.createElement("img");e.onload=function(){d=Number(e.height),l=Number(e.width),o()},e.src=m.currentSrc||m.src}function o(){f=document.createElement("div"),f.className="zoom-img-wrap",f.style.position="absolute",f.style.top=e(m).top+"px",f.style.left=e(m).left+"px",v=m.cloneNode(),v.style.visibility="hidden",m.style.width=m.offsetWidth+"px",m.parentNode.replaceChild(v,m),document.body.appendChild(f),f.appendChild(m),m.classList.add("zoom-img"),m.setAttribute("data-action","zoom-out"),c=document.createElement("div"),c.className="zoom-overlay",document.body.appendChild(c),i(),r()}function i(){m.offsetWidth;var e=l,n=d,o=e/m.width,i=window.innerHeight-t,r=window.innerWidth-t,s=e/n,a=r/i;u=e<r&&n<i?o:s<a?i/n*o:r/e*o}function r(){m.offsetWidth;var t=e(m),n=window.pageYOffset,o=n+window.innerHeight/2,i=window.innerWidth/2,r=t.top+m.height/2,s=t.left+m.width/2,a=Math.round(o-r),d=Math.round(i-s),l="scale("+u+")",c="translate("+d+"px, "+a+"px) translateZ(0)";m.style.webkitTransform=l,m.style.msTransform=l,m.style.transform=l,f.style.webkitTransform=c,f.style.msTransform=c,f.style.transform=c,document.body.classList.add("zoom-overlay-open")}function s(){if(document.body.classList.remove("zoom-overlay-open"),document.body.classList.add("zoom-overlay-transitioning"),m.style.webkitTransform="",m.style.msTransform="",m.style.transform="",f.style.webkitTransform="",f.style.msTransform="",f.style.transform="",!1 in document.body.style)return a();f.addEventListener("transitionend",a),f.addEventListener("webkitTransitionEnd",a)}function a(){m.removeEventListener("transitionend",a),m.removeEventListener("webkitTransitionEnd",a),f&&f.parentNode&&(m.classList.remove("zoom-img"),m.style.width="",m.setAttribute("data-action","zoom"),v.parentNode.replaceChild(m,v),f.parentNode.removeChild(f),c.parentNode.removeChild(c),document.body.classList.remove("zoom-overlay-transitioning"))}var d=null,l=null,c=null,u=null,m=null,f=null,v=null;return function(e){return m=e,{zoomImage:n,close:s,dispose:a}}}();(function(){function e(){document.body.addEventListener("click",function(e){"zoom"===e.target.getAttribute("data-action")&&"IMG"===e.target.tagName&&t(e)})}function t(e){if(e.stopPropagation(),!document.body.classList.contains("zoom-overlay-open")){if(e.metaKey||e.ctrlKey)return o();i({forceDispose:!0}),m=n(e.target),m.zoomImage(),r()}}function o(){window.open(event.target.getAttribute("data-original")||event.target.currentSrc||event.target.src,"_blank")}function i(e){e=e||{forceDispose:!1},m&&(m[e.forceDispose?"dispose":"close"](),s(),m=null)}function r(){window.addEventListener("scroll",a),document.addEventListener("click",l),document.addEventListener("keyup",d),document.addEventListener("touchstart",c),document.addEventListener("touchend",l)}function s(){window.removeEventListener("scroll",a),document.removeEventListener("keyup",d),document.removeEventListener("click",l),document.removeEventListener("touchstart",c),document.removeEventListener("touchend",l)}function a(e){null===f&&(f=window.pageYOffset);var t=f-window.pageYOffset;Math.abs(t)>=40&&i()}function d(e){27==e.keyCode&&i()}function l(e){e.stopPropagation(),e.preventDefault(),i()}function c(e){v=e.touches[0].pageY,e.target.addEventListener("touchmove",u)}function u(e){Math.abs(e.touches[0].pageY-v)<=10||(i(),e.target.removeEventListener("touchmove",u))}var m=null,f=null,v=null;return{listen:e}})().listen()}();
//# sourceMappingURL=/dist/zoom-vanilla.min.js.map
