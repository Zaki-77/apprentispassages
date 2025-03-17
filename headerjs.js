document.addEventListener('DOMContentLoaded', function() {
    var options = {}
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);

    document.querySelectorAll("a[rel]").forEach(elt => {
        elt.addEventListener("click", (e) => {
            var rel = "#" + e.target.rel
            var display = false;
            if (!document.querySelector(rel).classList.contains("active")) {
                display = true;
            }
            document.querySelectorAll("a[rel]").forEach(elt => {
                var relDelete = "#" + elt.rel
                document.querySelector(relDelete).classList.remove("active");
            });

            // console.log(e.target.rel);
            if (display) {
                document.querySelector(rel).classList.add("active");

            }

        })
    });
});