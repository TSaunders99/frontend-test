import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";

declare let $: any;

class PercentCounter extends AbstractComponent {

    public static selector: string = 'percent-counter';

    init(){
        super.init();
            console.log("test");
    }
}

new ComponentLoader(PercentCounter);