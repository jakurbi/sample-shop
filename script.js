document.addEventListener('DOMContentLoaded', function () {
       var input = document.getElementById('currency');
       if (localStorage['currency']) { // if job is set
           input.value = localStorage['currency']; // set the value
       }
       input.onchange = function () {
            localStorage['currency'] = this.value; // change localStorage on change
        }
    });
