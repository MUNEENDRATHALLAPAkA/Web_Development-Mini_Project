function getDatabase() {
    if (typeof (Storage) == "undefined")
        alert("No local Storage");

    else if (window.openDatabase) {

        var db = openDatabase("CollegeData", "1.0", "List of Colleges", 100000);
    
        db.transaction(function (tx) {
            var tid = document.getElementById('colleges');
            tx.executeSql("SELECT * FROM colleges", [],
                function (tx, rs) {
                    for (var i = 0; i < rs.rows.length; i++) {
                        item = rs.rows.item(i);
                        var cname = item['cname'];
                        var ccode = item['ccode'];
                        var addr = item['addr'];
                        var city = item['city'];
                        var zipcode = item['zipcode'];
                        var cont = item['cont'];
                        var stream = item['stream'];
                        tid.innerHTML += "<tr><td>" + cname + "</td><td>" + ccode + "</td><td>" + addr + "</td><td>" + city + "</td><td>" +zipcode + "</td></tr>" +cont + "</td></tr>"+stream + "</td></tr>";
                    }
                });
        });
    }
    else
        alert("Unable to open web sql database");
}   