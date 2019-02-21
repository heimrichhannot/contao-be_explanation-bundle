import { utilsBundle } from '@hundh/contao-utils-bundle';

class BeExplanationBundle {
    static onReady() {
        BeExplanationBundle.initCollapsibles();
    }

    static initCollapsibles() {
        utilsBundle.event.addDynamicEventListener('click', '.be_explanation .toggle', function(target) {
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