<v-navigation-drawer fixed v-model="drawer" app>
    <v-list dense>
        <v-list-tile>
            <v-list-tile-title>
                <h1>Markethub</h1>
            </v-list-tile-title>
        </v-list-tile>
        <v-list-tile href="<?php echo base_url() ?>product">
            <v-list-tile-action>
                <v-icon>home</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title>Daftar Produk</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-list-tile href="<?php echo base_url() ?>marketplace">
            <v-list-tile-action>
                <v-icon>contact_mail</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title>Marketplace</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
        <v-list-tile href="<?php echo base_url() ?>main/logout">
            <v-list-tile-action>
                <v-icon>power_settings_new</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title>Log Out</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
    </v-list>
</v-navigation-drawer>
<v-toolbar color="indigo" dark fixed app>
    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    <v-toolbar-title>Channel Manager</v-toolbar-title>
</v-toolbar>