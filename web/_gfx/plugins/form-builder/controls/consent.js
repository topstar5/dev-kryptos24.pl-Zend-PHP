/**
 * Star rating class - show 5 stars with the ability to select a rating
 */

// configure the class for runtime loading
if (!window.fbControls) window.fbControls = [];
window.fbControls.push(function(controlClass) {
  /**
   * Star rating class
   */
  class controlConsent extends controlClass {

    /**
     * Class configuration - return the icons & label related to this control
     * @returndefinition object
     */
    static get definition() {
      return {
        icon: '🌟',
        i18n: {
          default: 'Wyrażenie zgody'
        }
      };
    }

    /**
     * javascript & css to load
     */
    configure() {
      
    }

    /**
     * build a text DOM element, supporting other jquery text form-control's
     * @return {Object} DOM Element to be injected into the form.
     */
    build() {
      var className = (this.config.className)?this.config.className:'';
      return this.markup('input', null, {id: this.config.name, name: this.config.type, className: className, type: 'checkbox'});
    }

    /**
     * onRender callback
     */
    onRender() {
      let value = this.config.value || '';
      $('#'+this.config.name).val(value);
    }
  }

  // register this control for the following types & text subtypes
  controlClass.register('consent', controlConsent);
  return controlConsent;
});