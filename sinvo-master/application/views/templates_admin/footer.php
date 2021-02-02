<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

<script>
    // Area Chart Example

    let label = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    let dataIncome = [
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-01-01' and '2020-01-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-02-01' and '2020-02-29'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-03-01' and '2020-03-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-04-01' and '2020-04-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-05-01' and '2020-05-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-06-01' and '2020-06-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-07-01' and '2020-07-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-08-01' and '2020-08-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-09-01' and '2020-09-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-10-01' and '2020-10-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-11-01' and '2020-11-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT order_great_total FROM tbl_order where order_date between '2020-12-01' and '2020-12-31'")->num_rows(); ?>,
    ];

    let dataExpense = [
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-01-01' and '2020-01-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-02-01' and '2020-02-29'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-03-01' and '2020-03-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-04-01' and '2020-04-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-05-01' and '2020-05-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-06-01' and '2020-06-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-07-01' and '2020-07-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-08-01' and '2020-08-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-09-01' and '2020-09-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-10-01' and '2020-10-31'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-11-01' and '2020-11-30'")->num_rows(); ?>,
        <?= $this->db->query("SELECT expense_total FROM tbl_expense where expense_created_at between '2020-12-01' and '2020-12-31'")->num_rows(); ?>,
    ];

    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: label,
            datasets: [{
                    label: "Income",
                    backgroundColor: 'rgb(0,128,0,0.2)',
                    borderColor: 'rgb(0,128,0)',
                    data: dataIncome,
                },
                {
                    label: "Expense",
                    backgroundColor: 'rgb(255,0,0,0.2)',
                    borderColor: 'rgb(255,0,0)',
                    data: dataExpense,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
        }
    });
</script>
</body>

</html>