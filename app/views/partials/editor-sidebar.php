<div class="editor-sidebar">
    <div class="editor-content">
        <div class="sidebar-header">
            <a href="" class="back">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" fill="#fff"/>
                </svg>
            </a>
        </div>
        <div class="navigation-panel">
            <div class="tab-indicator">
                <div class="tab-title">
                    <a hraf="#" class="back-tab-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    </a>
                    <span>Design</span>
                </div>
                <div class="tab-description">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, deserunt!</p>
                </div>
            </div>
            <ul class="tab-items">
                <li class="tab-item">
                    <a href="" class="tab-link">
                        <div class="flex">
                            <svg height="1em" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M6,12 L11,12 C11.5522847,12 12,11.5522847 12,11 L12,6 L6,6 L6,12 Z M4,12 L4,6 L2,6 L2,11 C2,11.5522847 2.44771525,12 3,12 L4,12 Z M12,3 C12,2.44771525 11.5522847,2 11,2 L3,2 C2.44771525,2 2,2.44771525 2,3 L2,4 L12,4 L12,3 Z M3,0 L11,0 C12.6568542,0 14,1.34314575 14,3 L14,11 C14,12.6568542 12.6568542,14 11,14 L3,14 C1.34314575,14 0,12.6568542 0,11 L0,3 C0,1.34314575 1.34314575,0 3,0 Z"/></svg>
                            <span>Modelos</span>
                        </div>
                        <small class="tab-link-description">
                            Lorem, ipsum dolor.
                        </small>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-actions">
            <div class="action-buttons">
                <button onclick="resizePreview(320, 560)"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg></button>
                <button onclick="resizePreview(1200, 920)"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z"/></svg></button>
                <button onclick="resizePreview(1400, 1080)"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z"/></svg></button>
            </div>
        </div>
    </div>
</div>
<script>
    function resizePreview(width, height = null) {
        console.log(document.querySelector('.resisable-content'))
        document.querySelector('.resisable-content').style.width = width + 'px'
        document.querySelector('.resisable-content').style.height = height + 'px'
    }
</script>