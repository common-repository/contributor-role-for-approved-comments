<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Contributor_role_for_approved_comments
 * @author    Denis a-ka Hixon10 <Hixon@yandex.ru>
 * @license   GPL-2.0+
 * @link      http://hixon.ru/
 * @copyright 2014 Denis a-ka Hixon10
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'neededNumberOfApprovalComments_group' ); ?>

        <?php do_settings_sections( 'neededNumberOfApprovalComments_group' ); ?>

        <table class="form-table">
            <tr valign="top">
                <th scope="row">Needed number of approval comments for setting the Contributor Role by user:</th>
                <td><input type="text" name="neededNumberOfApprovalComments" value="<?php echo get_option('neededNumberOfApprovalComments'); ?>" /></td>
            </tr>
        </table>

        <?php submit_button(); ?>
    </form>

</div>
