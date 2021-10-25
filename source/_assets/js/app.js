import './global.js';
import * as Helper from './classes/Helpers';
import 'jquery-validation';

require.context('./../../_assets/images/', true, /^\.\/.*\.(jpe?g|png)/);


$(document).ready(function ($) {
    Helper.InputFilled();
    Helper.FixedHeader();
});
