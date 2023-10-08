<div class="editor-layer">
    <div class="draggable"><span></span></div>
    <div class="resisable-content">
        <iframe src="<?= $page ?>" style="width:100%; height:100%;border:0"></iframe>
    </div>
</div>
<script>
    document.querySelector('.draggable').addEventListener('mousedown', initResize, false)
    document.querySelector('.draggable').addEventListener('mouseup', stopResize, false)

    function initResize(e) {
        window.addEventListener('mousemove', Resize, false);
        window.addEventListener('mouseup', stopResize, false);
        document.querySelector('.draggable').classList.add('moving')
    }

    function Resize(e) {
        e.clientX < 260 ? e.clientX = 360 : null
        document.querySelector('.resisable-content').style.left = ((e.clientX - 360) + 'px');
        document.querySelector('.draggable').style.left = (e.clientX - 460 + 'px');

        if(document.querySelector('.resisable-content').getClientRects()[0].width <= 992) {
            document.querySelector('.resisable-content').style.right =  ((e.clientX - 360) / 3 + 'px');
            document.querySelector('.resisable-content').style.left = ((e.clientX - 360) / 3 + 'px');
        } else {
            document.querySelector('.resisable-content').style.left = ((e.clientX - 360) + 'px');
        }
    }
    //on mouseup remove windows functions mousemove & mouseup
    function stopResize(e) {
        window.removeEventListener('mousemove', Resize, false);
        window.removeEventListener('mouseup', stopResize, false);
        
        document.querySelector('.draggable').classList.remove('moving')
    
        if(document.querySelector('.resisable-content').getClientRects()[0].width <= 992) {
            document.querySelector('.draggable').style.left = ((e.clientX - 360) / 3 + 'px')
        } else {
            document.querySelector('.draggable').style.left = (e.clientX - 360 + 'px')
        }
    }
</script>