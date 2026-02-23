document.addEventListener('DOMContentLoaded', function(){
    const checkbox = document.getElementById('hide_finished');
    
    // 20260223 開発演習6 yomura haruto del s
    // checkbox.addEventListener('change',function(){
    // 20260223 開発演習6 yomura haruto del e

    // 20260223 開発演習6 yomura haruto add s
    const updateVisit = () => {
    // 20260223 開発演習6 yomura haruto add e
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const statusCell = row.cells[4];
            if (!statusCell) return;

            const isFinished = statusCell.textContent.trim() === '完了';
            if(checkbox.checked && isFinished){
                row.style.display = 'none';
            }else{
                row.style.display = '';
            }
        });
    };

    // 20260223 開発演習6 yomura haruto add s
    checkbox.addEventListener('change', updateVisit);
    updateVisit();
    // 20260223 開発演習6 yomura haruto add e
});