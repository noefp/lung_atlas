<!DOCTYPE html>
<html>
<body>


<h2>Lung Basic Atlas for <i>Mus musculus</i></h2>

<h3>About the experiment</h3>
<p>
    This dataset was published by <a href="https://doi.org/10.3389/fimmu.2024.1382449 " target="_blank">Kang ZY et al., 2024</a> 
    and raw data can be found in the BioProject <a href="https://www.ncbi.nlm.nih.gov/bioproject/?term=PRJNA1099642" target="_blank">BioProject PRJNA1099642</a>.<br>
    Cells source: Lungs.<br>
    Age:  6-8 weeks old.<br>
    Sex: Males<br>
    Layout: PAIRED.<br>
    Experimental condition: Lung tissues from intrapulmonary ALI models constructed by intratracheal injection of LPS, extrapulmonary ALI models by intraperitoneal injection of LPS, and control mice were collected and analyzed using scRNAseq.<br>
    Experimental procedure: Transcription profile of lungs after treatment with Lipopolysaccharide (LPS) injected into the lungs or injected in the peritoneum. Lungs were cut into small pieces and digested at 37°C until no rest of the tissues were observed. The resulting cell suspension was filtered and centrifugated and the supernatant was discarded. Red Blood Cell Lysis Buffer was then added to remove red cells.Another round of centrifugation and removal of the supernatant was followed. The viability of the cells was assessed using a hemocytometer. Lung single-cell suspensions underwent processing via a fully automated instrument known as the Chromium Controller. The library construction followed the protocol CG000204_ChromiumNextGEMSingleCell3_v 3.1_Rev_D, with library concentration determined using the Qubit method and fragment size assessed using Caliper. Sequencing was performed using MGISEQ-2000RS platform.<br>
</p>

<br>
<br>
<h3 style="text-align:center; font-size:160%;">Dotplot</h3>
<br>
<br>
<br>
<img src="path_to_dotplot/dotplot_scRNAseq_mouse_atlas.png" alt="Dotplot_scRNAseq">
<br>
<br>
<br>
<br>
<br>
<h3 style="text-align:center; font-size:160%;">Cells and Markers</h3>


<table style="width:100%">
    <tr>
        <th style="font-size:140%;width:15%">Cell name</th>
        <th style="font-size:140%;width:50%">Description</th>
        <th style="font-size:140%;width:35%">Markers</th>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke;">ATI</td>
        <td style="text-align:center; background-color:WhiteSmoke">Alveolar epithelial cell Type 1/td>
        <td style="text-align:center; background-color:WhiteSmoke">Pdpn, Hopx, Ager, Sftpc, Rtkn2 Mki67, Cd79a, Lmo7</td>
    </tr>
    <tr>
        <td style="text-align:center;">Basophils</td>
        <td style="text-align:center;">Basophils</td>
        <td style="text-align:center;">Cd200r3, Fcer1a</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Endothelial</td>
        <td style="text-align:center; background-color:WhiteSmoke">Endothelial cells in the lung</td>
        <td style="text-align:center; background-color:WhiteSmoke">Pecam1, Cdh5</td>
    </tr>
    <tr>
        <td style="text-align:center;">ATII</td>
        <td style="text-align:center;">Alveolar epithelial cell Type 2</td>
        <td style="text-align:center;">Etv5, Abca3, Lamp3, Fgfr2b</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Pericytes</td>
        <td style="text-align:center; background-color:WhiteSmoke">Pericytes</td>
        <td style="text-align:center; background-color:WhiteSmoke">Adamtsl3, Mcam, Notch3, Rgs5, Pdgfrb</td>
    </tr>
    <tr>
        <td style="text-align:center;">B_cells</td>
        <td style="text-align:center;">B cells</td>
        <td style="text-align:center;">Cd19, Ptprc</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">M1</td>
        <td style="text-align:center; background-color:WhiteSmoke">M1 macrophages</td>
        <td style="text-align:center; background-color:WhiteSmoke">Cd86</td>
    </tr>
    <tr>
        <td style="text-align:center;">M2</td>
        <td style="text-align:center;">M2 macrophages</td>
        <td style="text-align:center;">Mrc1, Arg1</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Dendritic cells</td>
        <td style="text-align:center; background-color:WhiteSmoke">Dendritic cells</td>
        <td style="text-align:center; background-color:WhiteSmoke">Itgax, Clec9a</td>
    </tr>
    <tr>
        <td style="text-align:center;">NKT</td>
        <td style="text-align:center;">Natural Killer T cells</td>
        <td style="text-align:center;">Nkg7, Klrb1c</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Neutrophils</td>
        <td style="text-align:center; background-color:WhiteSmoke">Neutrophils</td>
        <td style="text-align:center; background-color:WhiteSmoke">Ly6g, Itgam</td>
    </tr>
    <tr>
        <td style="text-align:center;">Treg</td>
        <td style="text-align:center;">Regulatory T cells</td>
        <td style="text-align:center;">Il2ra, Foxp3, Tnfrsf18</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Thelp</td>
        <td style="text-align:center; background-color:WhiteSmoke">Helper T cells</td>
        <td style="text-align:center; background-color:WhiteSmoke">Cd4, Cd3g, Gata3</td>
    </tr>
    <tr>
        <td style="text-align:center;">Monocytes and Inflam_monocytes</td>
        <td style="text-align:center;">Monocytes and Inflammatory monocytes</td>
        <td style="text-align:center;">F13a1, Ccr2, Ly6c1, Ly6c2, in the case of Inflammatory monocytes also Treml4 is highly expressed</td>
    </tr>
    <tr>
        <td style="text-align:center; background-color:WhiteSmoke">Myofibroblast</td>
        <td style="text-align:center; background-color:WhiteSmoke">Myofibroblasts, cells related with lung fibrosis</td>
        <td style="text-align:center; background-color:WhiteSmoke">Pf4</td>
    </tr>
    <tr>
        <td style="text-align:center;">Fibroblast</td>
        <td style="text-align:center;">Lung fibroblast</td>
        <td style="text-align:center;">Pdgfra</td>
    </tr>
</table>

</body>
</html>