<?php
$this->db->select('COUNT(tb_hasil_calon.id_hasil_calon) AS total, tb_calon.nama');
$this->db->join('tb_calon', 'tb_hasil_calon.id_calon = tb_calon.id_calon', 'left');
$this->db->group_by('tb_calon.nama');
$dataProdukChart = $this->db->get("tb_hasil_calon")->result();
foreach ($dataProdukChart as $k => $v) {
    $arrCalon[] = ['label' => $v->nama, 'y' => $v->total];
}
// print_r(json_encode($arrProd, JSON_NUMERIC_CHECK));die();
?>

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartCont", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true
    title:{
        text: "Hasil Voting Calon Ketua"
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
            <?=json_encode($arrCalon, JSON_NUMERIC_CHECK);?>

    }
    ]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartCont" style="height: 370px; width: 100%;"></div>
<script src="<?php echo base_url()?>assets/canvasjs/js/canvasjs.min.js"> </script>
</body>
</html>