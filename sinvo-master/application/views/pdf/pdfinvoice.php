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
                <img name="_1170:827" src="<?= base_url() ?>assets/img/target001.png" height="1170" width="827" border="0" usemap="#Map"></div>

            <?php foreach ($orders as $ord) : ?>
                <div class="pos" id="_100:219" style="top:219;left:100">
                    <span id="_15.2" style=" font-family:Arial; font-size:15.2px; color:#000000">
                        Invoice To</span>
                </div>
                <div class="pos" id="_450:219" style="top:219;left:500">
                    <span id="_15.2" style=" font-family:Arial; font-size:15.2px; color:#000000">
                        Invoice Date : <?= $ord->order_date ?></span>
                </div>
                <div class="pos" id="_100:240" style="top:240;left:100">
                    <span id="_15.3" style="font-weight:bold; font-family:Arial; font-size:15.3px; color:#000000">
                        <?= $ord->order_nama ?></span>
                </div>
                <div class="pos" id="_449:240" style="top:240;left:500">
                    <span id="_15.3" style=" font-family:Arial; font-size:15.3px; color:#000000">
                        Invoice No : <?= $ord->order_kode ?></span>
                </div>
                <div class="pos" id="_549:240" style="top:240;left:549">
                    <span id="_15.3" style=" font-family:Arial; font-size:15.3px; color:#000000">
                    </span>
                </div>
                <?php foreach ($order_item as $item) : ?>
                    <div class="pos" id="_121:323" style="top:305;left:141">
                        <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                            Type of Project</span>
                    </div>
                    <div class="pos" id="_280:323" style="top:305;left:300">
                        <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                            Item Description</span>
                    </div>
                    <div class="pos" id="_443:323" style="top:305;left:449">
                        <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                            Unit Price</span>
                    </div>
                    <div class="pos" id="_561:323" style="top:305;left:555">
                        <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                            Qty</span>
                    </div>
                    <div class="pos" id="_658:323" style="top:305;left:618">
                        <span id="_13.4" style=" font-family:Arial; font-size:13.4px; color:#ffffff">
                            Total</span>
                    </div>
                    <div class="pos" id="_156:346" style="top:330;left:120">
                        <span id="_14.7" style=" font-family:Arial; font-size:12px; color:#000000">
                            <?= $item->order_project ?></span>
                    </div>
                    <div class="pos" id="_318:346" style="top:330;left:320">
                        <span id="_14.7" style=" font-family:Arial; font-size:12px; color:#000000">
                            <?= $item->order_description ?></span>
                    </div>
                    <div class="pos" id="_469:346" style="top:330;left:443">
                        <span id="_14.7" style=" font-family:Arial; font-size:12px; color:#000000">
                            Rp <?= number_format($item->order_item_price, 0, ',', '.') ?></span>
                    </div>
                    <div class="pos" id="_546:346" style="top:330;left:561">
                        <span id="_14.7" style=" font-family:Arial; font-size:12px; color:#000000">
                            <?= $item->order_item_qty ?></span>
                    </div>
                    <div class="pos" id="_648:346" style="top:330;left:600">
                        <span id="_14.7" style=" font-family:Arial; font-size:12px; color:#000000">
                            Rp <?= number_format($item->order_item_subtotal, 0, ',', '.') ?></span>
                    </div>

                    <div class="pos" id="_100:797" style="top:757;left:100">
                        <span id="_14.7" style="font-weight:bold; font-family:Arial; font-size:14.7px; color:#000000">
                            Payment Method </span>
                    </div>
                    <?php if ($ord->order_payment == 'Transfer') {
                        echo '<div class="pos" id="_648:346" style="top:795;left:113">
                                                <span id="_14.7" style=" font-family:Arial; font-size:20px; color:#000000">
                                                    X</span>
                                            </div>';
                    } else {
                        echo '<div class="pos" id="_648:346" style="top:820;left:113">
                                                <span id="_14.7" style=" font-family:Arial; font-size:20px; color:#000000">
                                                    X</span>
                                            </div>';
                    } ?>
                    <div class="pos" id="_146:828" style="top:793;left:146">
                        <span id="_12.0" style=" font-family:Arial; font-size:12.0px; color:#000000">
                            Transfer </span>
                    </div>
                    <div class="pos" id="_486:823" style="top:767;left:460">
                        <span id="_14.7" style="font-weight:bold; font-family:Arial; font-size:14.7px; color:#000000">
                            Sub Total</span>
                    </div>
                    <div class="pos" id="_651:824" style="top:767;left:630">
                        <span id="_11.2" style="font-weight:bold; font-family:Arial; font-size:11.2px; color:#000000">
                            Rp <?= number_format($ord->order_subtotal, 0, ',', '.') ?></span>
                    </div>
                    <div class="pos" id="_146:842" style="top:807;left:146">
                        <span id="_11.1" style="font-weight:bold; font-family:Arial; font-size:9.5px; color:#000000">
                            (BCA 6175028238 an Muhammad Malian Zikri)</span>
                    </div>
                    <div class="pos" id="_488:842" style="top:792;left:460">
                        <span id="_15.0" style="font-weight:bold; font-family:Arial; font-size:15.0px; color:#f16544">
                            Discount</span>
                    </div>
                    <div class="pos" id="_609:843" style="top:792;left:585">
                        <span id="_12.2" style="font-weight:bold; font-family:Arial; font-size:12.2px; color:#000000">
                            <?= $ord->order_diskon ?>%</span>
                    </div>
                    <div class="pos" id="_651:843" style="top:792;left:630">
                        <span id="_12.2" style="font-weight:bold; font-family:Arial; font-size:12.2px; color:#000000">
                            Rp <?php $rp = $ord->order_diskon * $ord->order_subtotal / 100;
                                echo  number_format($rp, 0, ',', '.') ?></span>
                    </div>
                    <div class="pos" id="_146:862" style="top:825;left:146">
                        <span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
                            Cash</span>
                    </div>
                    <div class="pos" id="_476:867" style="top:830;left:460">
                        <span id="_12.0" style="font-weight:bold; font-family:Arial; font-size:12.0px; color:#ffffff">
                            GRAND TOTAL</span>
                    </div>
                    <div class="pos" id="_651:867" style="top:830;left:631">
                        <span id="_11.2" style="font-weight:bold; font-family:Arial; font-size:11.2px; color:#ffffff">
                            Rp <?= number_format($ord->order_great_total, 0, ',', '.') ?></span>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </nowrap>
    </nobr>
</body>

</html>