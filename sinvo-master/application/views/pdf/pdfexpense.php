<html>

<head>
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 4px;

        }

        .pos {
            position: absolute;
            z-index: 0;
            left: 0px;
            top: 0px
        }
    </style>
</head>

<body>
    <nobr>
        <nowrap>
            <div class="pos" id="_0:0" style="top:0">
                <img name="_1170:827" src="<?= base_url() ?>assets/img/target002.png" height="1170" width="827" border="0" usemap="#Map"></div>
            <?php foreach ($expense as $exp) : ?>
                <div class="pos" id="_100:219" style="top:219;left:100">
                    <span id="_15.2" style=" font-family:Arial; font-size:15.2px; color:#000000">
                        Created For</span>
                </div>
                <div class="pos" id="_450:219" style="top:219;left:500">
                    <span id="_15.2" style=" font-family:Arial; font-size:15.2px; color:#000000">
                        Expense Date : <?= $exp->expense_created_at ?></span>
                </div>
                <div class="pos" id="_100:240" style="top:240;left:100">
                    <span id="_15.3" style="font-weight:bold; font-family:Arial; font-size:15.3px; color:#000000">
                        Owner
                </div>
                <div class="pos" id="_449:240" style="top:240;left:500">
                    <span id="_15.3" style=" font-family:Arial; font-size:15.3px; color:#000000">
                        Expense No : <?= $exp->expense_id ?></span>
                </div>
                <div class="pos" id="_549:240" style="top:240;left:549">
                    <span id="_15.3" style=" font-family:Arial; font-size:15.3px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_121:323" style="top:305;left:121">
                    <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                        Expense Name</span>
                </div>
                <div class="pos" id="_280:323" style="top:305;left:280">
                    <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                        Description</span>
                </div>
                <div class="pos" id="_443:323" style="top:305;left:433">
                    <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                        Unit Price</span>
                </div>
                <div class="pos" id="_561:323" style="top:305;left:541">
                    <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                        Qty</span>
                </div>
                <div class="pos" id="_658:323" style="top:305;left:618">
                    <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                        Total</span>
                </div>
                <div class="pos" id="_156:346" style="top:330;left:148">
                    <span id="_14.7" style=" font-family:Arial; font-size:14.7px; color:#000000">
                        <?= $exp->expense_nama ?></span>
                </div>
                <div class="pos" id="_318:346" style="top:330;left:260">
                    <span id="_14.7" style=" font-family:Arial; font-size:14.7px; color:#000000">
                        <?= $exp->expense_keterangan ?></span>
                </div>
                <div class="pos" id="_469:346" style="top:330;left:417">
                    <span id="_14.7" style=" font-family:Arial; font-size:14.7px; color:#000000">
                        Rp <?= number_format($exp->expense_harga, 0, ',', '.') ?></span>
                </div>
                <div class="pos" id="_546:346" style="top:330;left:546">
                    <span id="_14.7" style=" font-family:Arial; font-size:14.7px; color:#000000">
                        <?= $exp->expense_qty ?></span>
                </div>
                <div class="pos" id="_648:346" style="top:330;left:590">
                    <span id="_14.7" style=" font-family:Arial; font-size:14.7px; color:#000000">
                        Rp <?= number_format($exp->expense_total, 0, ',', '.') ?>
                    </span>
                </div>
                </div>
                <div class="pos" id="_486:823" style="top:767;left:460">
                    <span id="_14.7" style="font-weight:bold; font-family:Arial; font-size:14.7px; color:#000000">
                        Sub Total</span>
                </div>
                <div class="pos" id="_651:824" style="top:767;left:630">
                    <span id="_11.2" style="font-weight:bold; font-family:Arial; font-size:11.2px; color:#000000">
                        Rp <?= number_format($exp->expense_total, 0, ',', '.') ?></span>
                </div>
                <div class="pos" id="_476:867" style="top:830;left:460">
                    <span id="_12.0" style="font-weight:bold; font-family:Arial; font-size:12.0px; color:#ffffff">
                        GRAND TOTAL</span>
                </div>
                <div class="pos" id="_651:867" style="top:830;left:631">
                    <span id="_11.2" style="font-weight:bold; font-family:Arial; font-size:11.2px; color:#ffffff">
                        Rp <?= number_format($exp->expense_total, 0, ',', '.') ?></span>
                </div>
            <?php endforeach; ?>
        </nowrap>
    </nobr>
</body>

</html>