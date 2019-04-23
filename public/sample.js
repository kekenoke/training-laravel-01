window.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('goBack');
        const goBackAction=()=>{
        console.log('topもどるよ');
        window.scrollTo(0,50);
        };
        button.addEventListener('click',goBackAction,false);
});


