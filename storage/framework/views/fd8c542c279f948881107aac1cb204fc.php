<div style="text-align: center;">
    <img src="<?php echo e($imagePath); ?>" alt="" style="width: 400px; margin: 50px auto;">
</div>
    <table class="min-w-full" border="1" width="100%">
    <thead>
        <tr>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">id</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">User</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Pack commandé</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date de la commande</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Montant (DH)</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Mode paiement</th>
        </tr>
    </thead>

    <tbody class="bg-white">
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                    <div class="text-sm leading-5 font-medium text-gray-900"><?php echo e($commande->id); ?></div>
                </div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900"><?php echo e($commande->user->nom); ?></div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900"><?php echo e($commande->pack->nom); ?></div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900"><?php echo e($commande->date_commande); ?></div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900"><?php echo e($commande->pack->prix); ?></div>
            </td>

            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900"><?php echo e($commande->mode_paiement); ?></div>
            </td>

        </tr>

    </tbody>
</table>
<?php /**PATH D:\ENSET\s3\stage\projet\prj\LegAnno\resources\views/pdf/commande.blade.php ENDPATH**/ ?>