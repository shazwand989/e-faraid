<div class="container-fluid" id="senarai-waris">
    <div class="row">
        <div class="col-12">
            <h1>Senarai Waris</h1>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-3 col-12">
                <table class="table table-bordered">
                    <tr class="bg-info">
                        <th colspan="2">Senarai Simati</th>
                    </tr>
                    <tr>
                        <td class="w-75">Jantina</td>
                        <td class="w-25">
                            <input id="jantina" type="checkbox" data-toggle="switchbutton" data-onlabel="Lelaki" data-offlabel="Pereampuan" data-onstyle="info" data-offstyle="success">
                        </td>
                    </tr>
                    <tr class="bg-info">
                        <th colspan="2">Waris Utama</th>
                    </tr>
                    <tr id="jantinaLelaki">
                        <td>Isteri</td>
                        <td>
                            <input id="iISTERI" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iISTERI')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iISTERI')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr id="jantinaPerempuan">
                        <td>Suami</td>
                        <td>
                            <input type="checkbox" data-toggle="switchbutton" checked data-onlabel="0" data-offlabel="1" data-onstyle="info" data-offstyle="success">
                        </td>
                    </tr>
                    <tr>
                        <td>Bapa</td>
                        <td>
                            <input id="iBAPA" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iBAPA')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iBAPA')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ibu</td>
                        <td>
                            <input id="iIBU" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iIBU')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iIBU')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki (AL)</td>
                        <td>
                            <input id="iANAKLELAKI" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iANAKLELAKI')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iANAKLELAKI')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Perempuan (AP)</td>
                        <td>
                            <input id="iANAKPEREMPUAN" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iANAKPEREMPUAN')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iANAKPEREMPUAN')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="col-lg-5 col-12">
                <table class="table table-bordered">
                    <tr class="bg-info">
                        <th colspan="2">Waris Ganti</th>
                    </tr>
                    <tr>
                        <td>Bapa Kepada Bapa (Datuk)</td>
                        <td>
                            <input id="iDATUKBAPA" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iDATUKBAPA')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iDATUKBAPA')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ibu Kepada Bapa (Nenek)</td>
                        <td>
                            <input id="iDATUKNENEK" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iDATUKNENEK')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iDATUKNENEK')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ibu Kepada Ibu (Nenek)</td>
                        <td>
                            <input id="iNENEKNENEK" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iNENEKNENEK')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iNENEKNENEK')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada Anak Lelaki (Cucu Lelaki)</td>
                        <td>
                            <input id="iCUCULELAKI" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iCUCULELAKI')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iCUCULELAKI')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada Anak Perempuan (Cucu Perempuan)</td>
                        <td>
                            <input id="iCUCUPEREMPUAN" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iCUCUPEREMPUAN')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iCUCUPEREMPUAN')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>AL kepada AL kepada AL (Cicit Lelaki)</td>
                        <td>
                            <input id="iCICITLELAKI" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iCICITLELAKI')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iCICITLELAKI')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>AP kepada AL kepada AL (Cicit Perempuan)</td>
                        <td>
                            <input id="iCICITPEREMPUAN" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iCICITPEREMPUAN')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iCICITPEREMPUAN')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4 col-12">
                <table class="table table-bordered">
                    <tr class="bg-info">
                        <th colspan="2">Waris Kedua</th>
                    </tr>
                    <tr>
                        <td>Saudara Seibu Sebapa Lelaki (SIBL)</td>
                        <td>
                            <input id="iSIBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSIBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSIBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Saudara Sebapa Lelaki (SBL)</td>
                        <td>
                            <input id="iSBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Saudara Seibu Lelaki (SIL)</td>
                        <td>
                            <input id="iSIL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSIL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSIL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Saudara Seibu Sebapa Perempuan (SIBP)</td>
                        <td>
                            <input id="iSIBP" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSIBP')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSIBP')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Saudara Sebapa Perempuan (SBP)</td>
                        <td>
                            <input id="iSBP" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSBP')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSBP')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Saudara Seibu Perempuan (SIP)</td>
                        <td>
                            <input id="iSIP" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iSIP')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iSIP')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada SIBL (Anak Saudara)</td>
                        <td>
                            <input id="iANAKSIBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('ANAKSIBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('ANAKSIBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada SBL (Anak Saudara)</td>
                        <td>
                            <input id="iANAKSBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iANAKSBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iANAKSBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>SIBL kepada Bapa (Bapa Saudara)</td>
                        <td>
                            <input id="iBAPASIBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iBAPASIBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iBAPASIBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>SBL kepada Bapa (Bapa Saudara)</td>
                        <td>
                            <input id="iBAPASBL" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iBAPASBL')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iBAPASBL')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada SIBL kepada Bapa (Sepupu)</td>
                        <td>
                            <input id="iANAKSIBLBAPA" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" type="button" onclick="kurang('iANAKSIBLBAPA')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" type="button" onclick="tambah('iANAKSIBLBAPA')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Lelaki kepada SBL kepada Bapa (Sepupu)</td>
                        <td>
                            <input id="iANAKSBLBAPA" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" onclick="kurang('iANAKSBLBAPA')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" onclick="tambah('iANAKSBLBAPA')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>SIBL Datuk</td>
                        <td>
                            <input id="iSIBLDATUK" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" onclick="kurang('iSIBLDATUK')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" onclick="tambah('iSIBLDATUK')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>SBL Datuk</td>
                        <td>
                            <input id="iSBLDATUK" type="number" value="0" min="0" max="9" readonly="">
                            <button class="btn btn-primary btn-xs" onclick="kurang('iSBLDATUK')">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-primary btn-xs" onclick="tambah('iSBLDATUK')">
                                <i class="fas fa-plus"></i>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>