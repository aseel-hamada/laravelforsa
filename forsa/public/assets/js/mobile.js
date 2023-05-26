
  // Ignore this in your implementation
  window.isMbscDemo = true;
 


mobiscroll.setOptions({
locale: mobiscroll.localeAr,                                         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
theme: 'ios',                                                        // Specify theme like: theme: 'ios' or omit setting to use default
themeVariant: 'light'                                                // More info about themeVariant: https://docs.mobiscroll.com/5-24-1/javascript/select#opt-themeVariant
});

mobiscroll.select('#demo-multiple-select', {
inputElement: document.getElementById('demo-multiple-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-24-1/javascript/select#opt-inputElement
});
