<v-content>
    <v-container style="position: relative">
        <v-layout row wrap>
            <v-flex xs12 md6 offset-md3>
                <v-card>
                    <v-card-title>
                        <h1>Tambah Produk</h1>
                    </v-card-title>
                    <v-card-text>
                        <v-form action="welcome_get.php" method="get">
                            <v-text-field name="nama_produk" label="Nama Produk" requried></v-text-field>
                            <v-text-field name="sku" label="SKU" requried></v-text-field>
                            <v-checkbox v-model="asuransi" label="Asuransi"></v-checkbox>
                            <input style="display:none;" type="checkbox" name="asuransi" :checked="asuransi">
                            <v-text-field name="minimum_order" label="Minimum Order" requried></v-text-field>
                            <v-text-field name="harga" label="Harga" requried></v-text-field>
                            <v-text-field name="berat" label="Berat (gram)" requried></v-text-field>
                            <v-text-field name="stok" label="Stok" requried></v-text-field>
                            <v-text-field name="deskripsi" label="Deskripsi" textarea requried></v-text-field>
                            <v-select :items="kategories1" v-model="ctg1" label="Kategori 1" single-line
                                      bottom></v-select>
                            <input style="display:none;" type="text" name="ctg1" :value="ctg1.text">
                            <v-btn block color="primary" type="submit">Tambah</v-btn>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</v-content>