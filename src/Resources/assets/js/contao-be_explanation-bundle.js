import { EventUtil } from '@hundh/contao-utils-bundle';
import '../scss/contao-be-explanation-bundle.scss'

class BeExplanationBundle {
    static onReady() {
        BeExplanationBundle.initCollapsibles();
    }

    static initCollapsibles() {
        EventUtil.addDynamicEventListener('click', '.be_explanation .toggle', function(target) {
            let classList = target.parentNode.classList;

            if (classList.contains('open'))
            {
                classList.remove('open');
            }
            else
            {
                classList.add('open');
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', BeExplanationBundle.onReady);