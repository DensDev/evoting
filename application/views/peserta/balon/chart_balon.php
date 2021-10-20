<?php
$this->db->select('COUNT(tb_hasil_balon.id_hasil_balon) AS total, tb_bakal_calon.nama');
$this->db->join('tb_bakal_calon', 'tb_hasil_balon.id_balon = tb_bakal_calon.id_balon', 'left');
$this->db->group_by('tb_bakal_calon.nama');
$dataProdukChart = $this->db->get("tb_hasil_balon")->result();
foreach ($dataProdukChart as $k => $v) {
    $arrProd[] = ['label' => $v->nama, 'y' => $v->total];
}
// print_r(json_encode($arrProd, JSON_NUMERIC_CHECK));die();
?>

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true
    title:{
        text: "Hasil Voting Bakal Calon Ketua"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        /*dataPoints: [
            { label: "apple",  y: 10  },
            { label: "orange", y: 15  },
            { label: "banana", y: 25  },
            { label: "mango",  y: 30  },
            { label: "grape",  y: 28  }
        ]*/
        dataPoints:
            <?=json_encode($arrProd, JSON_NUMERIC_CHECK);?>

    }
    ]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="<?php echo base_url()?>assets/canvasjs/js/canvasjs.min.js"> </script>
</body>
</html>
