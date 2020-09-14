import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";

declare let $: any;

class PercentCounter extends AbstractComponent {

    public static selector: string = 'percent-counter';

    init(){
        super.init();
            console.log("test");
            let PercentContainer = document.getElementById("percent-display") as HTMLElement;
            PercentContainer.innerText = "test";
    }
}

new ComponentLoader(PercentCounter);