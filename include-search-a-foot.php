<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/vendor/top.js"></script>
<script src="js/vendor/patient-float.js"></script>
<script>
    let div1 = document.getElementById('div1')
    let div2 = document.getElementById('div2')
    let link1 = document.getElementById('link1')
    let link2 = document.getElementById('link2')

    link1.addEventListener("click", function() {
        div1.style.display = "none"
        div2.style.display = "block"
    })

    link2.addEventListener("click", function() {
        div2.style.display = "none"
        div1.style.display = "block"
    })

</script>
</body>

</html>
