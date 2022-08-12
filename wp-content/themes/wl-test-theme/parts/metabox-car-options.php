<?php
$fuelList = [
    'diesel',
    'petrol',
    'gas'
];
?>

<table class="form-table">
    <tbody>
    <tr>
        <th>
            <label for="wl_meta_color">
                <?php _e('Color', 'woplab'); ?>
            </label>
        </th>
        <td>
            <input type="color"
                   name="wl_meta_color"
                   id="wl_meta_color"
                   value="<?php echo $args['wl_meta_color'] ?? ''; ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label for="wl_meta_fuel">
                <?php _e('Fuel', 'woplab') ?>
            </label>
        </th>
        <td>
            <select name="wl_meta_fuel" id="wl_meta_fuel" style="width: 100%">
                <option value="" <?php echo !isset($args['wl_meta_fuel']) ? 'selected="selected"' : ''; ?>>
                    <?php _e('Select...', 'woplab'); ?>
                </option>
                <?php foreach ($fuelList as $fuel) : ?>
                    <option value="<?php echo $fuel; ?>" <?php isset($args['wl_meta_fuel']) ? selected($fuel, $args['wl_meta_fuel']) : ''; ?>>
                        <?php echo ucfirst($fuel); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <th>
            <label for="wl_meta_power">
                <?php _e('Power', 'woplab'); ?>
            </label>
        </th>
        <td>
            <input type="number"
                   name="wl_meta_power"
                   id="wl_meta_power"
                   value="<?php echo $args['wl_meta_power'] ?? 0; ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label for="wl_meta_price">
                <?php _e('Price', 'woplab'); ?>
            </label>
        </th>
        <td>
            <input type="number"
                   name="wl_meta_price"
                   id="wl_meta_price"
                   value="<?php echo $args['wl_meta_price'] ?? 0; ?>">
        </td>
    </tr>
    </tbody>
</table>
