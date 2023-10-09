export default class ResizableContent {
    constructor(obj = { draggable: null, panel: null }) {
      this.panel = obj.panel;
      this.draggableElement = obj.draggable;
      this.init();
    }
  
    init() {
      this.mousemoveHandler = (e) => {
        this.resizeHandler(e);
      };
      this.mouseupHandler = (e) => {
        this.stopResize(e);
      };
  
      this.draggableElement.addEventListener("mousedown", (e) => {
        this.initResize(e);
      });
  
      this.draggableElement.addEventListener("mouseup", this.mouseupHandler);
    }
  
    initResize(e) {
      window.addEventListener("mousemove", this.mousemoveHandler, false);
      window.addEventListener("mouseup", this.mouseupHandler, false);
  
      this.draggableElement.classList.add("moving");
    }
  
    stopResize(ev) {
      window.removeEventListener("mousemove", this.mousemoveHandler, false);
      window.removeEventListener("mouseup", this.mouseupHandler, false);

      if(this.expansible) {
        document.querySelector('.editor-layer').classList.add('expand')
      } else {
        document.querySelector('.editor-layer').classList.remove('expand')
      }

      this.draggableElement.style.left = ev.clientX - 360 - 10 + "px";
  
      this.draggableElement.classList.remove("moving");

      if(!this.expansible && ev.clientX < 360) {
        this.panel.element.style.left = '24px'
        this.panel.element.style.right = '24px'
        this.draggableElement.style.left = '10px'
      }

    }
  
    resize(e) {

      var panelClientRect = this.panel.element.getClientRects()[0];

      this.draggableElement.style.left = `${ e.clientX - (this.panel.offsetLeft) }px`;

      this.panel.element.style.left = `${e.clientX  - this.panel.offsetLeft}px`;

      this.panel.element.style.right == '0px' ? this.panel.element.style.right = '0px' : `${e.clientX - this.panel.offsetLeft}px`; 
      
      document.querySelector('.editor-layer').classList.remove('expand')

     if(e.clientX < 150) {
        this.expansible = true
     }else {
        this.expansible = false
     }

    }
  
    resizeHandler(e) {
      this.resize(e);
    }
  }
  