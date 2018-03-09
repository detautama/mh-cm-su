<v-content>
    <v-container style="position: relative">
        <v-layout row wrap>
            <v-flex xs12>
                <v-container fluid grid-list-lg>
                    <v-layout row wrap>
                        <v-flex class="m-2" xs6 md3 v-for="item in items">
                            <v-card href="<?php echo base_url() ?>product/detail">
                                <v-card-media
                                        src="https://s2.bukalapak.com/img/2441134031/large/Mifi_Modem_Wifi_4G_XL_Go_Movimax_MV003_Free_60Gb_60Hari_BEST.jpg"
                                        height="200px">
                                </v-card-media>
                                <v-card-title primary-title>
                                    <div>
                                        Mifi XL Go
                                    </div>
                                </v-card-title>
                            </v-card>
                        </v-flex>
                        <v-btn href="<?php echo base_url() ?>product/add" color="pink" dark fixed fab
                               style="right:30px;bottom:50px">
                            <v-icon>add</v-icon>
                        </v-btn>
                    </v-layout>
                </v-container>
            </v-flex>
        </v-layout>
    </v-container>
</v-content>
