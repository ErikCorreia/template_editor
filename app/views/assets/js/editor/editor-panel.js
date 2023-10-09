import Resizable from "./preview-panel.js";

export default class EditorPreviw {
  constructor(panelClass, draggable) {
    this.panel = document.querySelector(panelClass);

    const resizableContent = new Resizable({
      draggable: draggable,
      panel: {
        element: this.panel,
        offsetLeft: 360,
        offsetRight: null,
      },
    });
  }
}
