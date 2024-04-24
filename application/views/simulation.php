<div class="container" style="grid-template-columns: 1fr;">
    <div class="title">Your simulation</div>
    <div>
        
    </div>
    <table>
        <tr>
            <th class="id">Num Mensualite</th>
            <th class="name">Date versement</th>
            <th class="number">Solde Initial</th>
            <th class="number">Mensualite</th>
            <th class="number">CapitalRembourse</th>
            <th class="number">Interet</th>
            <th class="number">Capital Restant</th>
        </tr>
        <?php foreach ($table as $data) { ?>
            <tr>
                <td class="id"><?php echo $data['num_mensualite']; ?></td>
                <td class="id"><?php echo $data['versement']; ?></td>
                <td class="id"><?php echo $data['initial']; ?></td>
                <td class="id"><?php echo $data['mensualite']; ?></td>
                <td class="id"><?php echo $data['capital_rembourse']; ?></td>
                <td class="id"><?php echo $data['interet']; ?></td>
                <td class="id"><?php echo $data['capital_restant']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>