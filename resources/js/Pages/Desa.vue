<template>
    <div>
        <div id="sejarah" class="" style="background-color: #6C63FF; position:fixed; width: 100vw; z-index: 3;">
            <br>
            <div class="p-grid p-jc-between" style="color: white;">
                <div class="p-col-12 p-md-6 p-lg-6">

                    <div class="p-d-flex p-jc-start">
                        <img alt="logo" src="https://primefaces.org/primevue/showcase/img/logo.d32bce0e.svg" height="30"
                            width="30" class="p-mr-2 p-ml-4">
                        <div class="">Desa Binangga</div>
                    </div>
                </div>
                <div class="p-col-12 p-md-6 p-lg-6">
                    <div class="p-d-flex p-jc-center">
                        <!-- <Menubar :model="items" >
                          </Menubar> -->
                        <div class="p-mr-4 hvr-underline-from-left"> <a href="#sejarah"> Tentang </a></div>
                        <div class="p-mr-4 hvr-underline-from-left"> <a href="#statistik"> Statistik </a></div>
                        <div class="p-mr-4 hvr-underline-from-left"> <a href="#tamanData"> Taman Data </a></div>
                    </div>

                </div>

            </div>

        </div>


        <div class="p-grid p-jc-center">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#6C63FF" fill-opacity="1"
                    d="M0,320L48,282.7C96,245,192,171,288,165.3C384,160,480,224,576,229.3C672,235,768,181,864,170.7C960,160,1056,192,1152,208C1248,224,1344,224,1392,224L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>

            <div class="p-col-12 p-md-1 p-lg-1 bgimagecustom">
                <div class="box"></div>
            </div>
            <div class="p-col-12 p-md-10 p-lg-10 media">
                <br><br><br>
                <div>

                    <!-- <Menubar >
                        <template #start>
                            <img alt="logo" src="https://primefaces.org/primevue/showcase/img/logo.d32bce0e.svg"
                                height="30" width="30" class="p-mr-2">
                        </template>
                        <template #item="{menuBar}">
                            <div class="p-d-flex p-jc-end">
                                <div class="p-mr-2">{{menuBar.label}} 1</div>
                                <div>Item 2</div>
                            </div>
                        </template>
                        <template #end>
                            <img alt="logo" src="https://primefaces.org/primevue/showcase/img/logo.d32bce0e.svg"
                                height="30" width="30" class="p-mr-2">
                        </template>
                    </Menubar> -->
                    <br> <br>
                    <!-- Sejarah -->
                    <div id="" class="p-grid p-jc-between p-shadow-24">

                        <Card class="" style=" border-radius: 25px;">
                            <template #header>

                            </template>
                            <template #title>
                                <p style="color: #6C63FF;">Tentang Desa Binangga</p>
                            </template>
                            <template #content>
                                <div class="p-grid p-jc-between">
                                    <div class="p-col-12 p-md-6 p-lg-6 p-text-justify">

                                        Desa Binangga berasal dari bahasa kaili ledo yang artinya
                                        sungai kering, tetapi desa binangga bukan merupakan daerah
                                        bebas aliran sungai melainkan berasal dari nama orang yaitu
                                        Sabinangga. Sabinangga berasal dari Volo, salah satu tempat
                                        diatas pegunungan Gawalise, mereka turun dari atas
                                        pegunungan gawalise mengikuti aliran sungai Sombe hingga di
                                        sebuah tempat yang masih penuh dengan hutan. Sabinangga
                                        bertemu dengan seorang gadis kemudian dinikahinya.
                                        Dari perkawinan tersebut Sabinangga memperoleh lima (5)
                                        orang anak yang bernama Nurudiah, Raja Kuna, Nurpiah, Sove
                                        dan Tondigi.



                                    </div>
                                    <div class="p-col-12 p-md-6 p-lg-6">
                                        <div class="p-d-flex p-jc-center">


                                            <Galleria :value="images" :responsiveOptions="responsiveOptions"
                                                :numVisible="5" containerStyle="width: 380px;  height: 380px"
                                                :autoPlay="true" :transitionInterval="2000" :circular="true">
                                                <template #item="slotProps">
                                                    <img :src="slotProps.item.itemImageSrc" :alt="slotProps.item.alt"
                                                        style="width: 100%" />
                                                </template>
                                                <template #thumbnail="slotProps">
                                                    <img :src="slotProps.item.thumbnailImageSrc"
                                                        :alt="slotProps.item.alt" />
                                                </template>
                                            </Galleria>

                                        </div>
                                    </div>
                                </div>
                            </template>

                        </Card>


                    </div>

                    <div id="statistik" class="">
                        <br>
                        <!-- Geografis -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont " data-aos="fade-up"
                                    data-aos-duration="3000">

                                    <!-- <i class="fas fa-school p-mr-2"></i> -->
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_9ee7bmlt.json"
                                        speed="1" class="lottieGeografis" loop autoplay>
                                    </lottie-player>
                                    <b> Geografis</b>

                                </div>
                            </Divider>

                            <div class="p-grid p-jc-evenly p-flex" style="font-size: 20px;">

                                <div class="p-col-12 p-md-6 p-lg-4 p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6" style=" border-radius: 25px;">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-8">
                                                Luas Wilayah <br>
                                                2.11 Km <sup>2</sup>
                                            </div>
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;" class="fas fa-map text-blue-500 p-mr-2"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <br>
                            <div class="p-grid p-jc-center" style="font-size: 25px;">
                                <p> <b class="text-blue-500"> Batas Wilayah </b> </p>
                            </div><br>
                            <div class="p-grid p-jc-evenly p-flex" style="font-size: 20px;">

                                <div class="p-col-12 p-md-6 p-lg-3 p-as-center p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6" style=" border-radius: 25px;">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;"
                                                    class="fas fa-arrow-left text-blue-500 p-mr-2"></i>
                                            </div>
                                            <div class="p-col-8">
                                                Sebelah Barat <br>
                                                Desa Boya Baliase
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="p-col-12 p-md-6 p-lg-3 p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6" style=" border-radius: 25px;">
                                        <div class="p-grid p-p-3 p-jc-center">
                                            <i style="font-size: 40px;"
                                                class="fas fa-arrow-up text-blue-500 p-mr-2"></i>
                                            <div class="p-col-12 ">
                                                Sebelah Utara <br>
                                                Desa Baliase
                                            </div>
                                            <!-- <div class="p-col-4 p-as-center">
                                            
                                            </div> -->
                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="p-shadow-6" style=" border-radius: 25px;">
                                        <div class="p-grid p-p-3 p-jc-center">

                                            <div class="p-col-12">
                                                Sebelah Selatan <br>
                                                Desa Padende
                                            </div>
                                            <i style="font-size: 40px;"
                                                class="fas fa-arrow-down text-blue-500 p-mr-2"></i><br>
                                            <!-- <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;" class="fas fa-arrow-down text-blue-500 p-mr-2"></i>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>

                                <div class="p-col-12 p-md-6 p-lg-3 p-as-center p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6" style=" border-radius: 25px;">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-8">
                                                Sebelah Timur <br>
                                                Desa Sunju
                                            </div>
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;"
                                                    class="fas fa-arrow-right text-blue-500 p-mr-2"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>






                            </div>
                            <br>
                            <br>
                            <div class="p-grid p-jc-evenly " data-aos="fade-up">
                                <!-- maps -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9488.129779367891!2d119.8538760734645!3d-0.9523690230587496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bf3caadfd900b%3A0x6f11e8c560e11746!2sBinangga%2C%20Marawola%2C%20Sigi%20Regency%2C%20Central%20Sulawesi!5e0!3m2!1sen!2sid!4v1634214956965!5m2!1sen!2sid"
                                    width="1000" height="450" style=" border-radius: 25px;" allowfullscreen=""
                                    loading="lazy"></iframe>


                                <!-- <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="kelompokUmur" stripedRows responsiveLayout="scroll">
                                                <Column field="kelompokUmur" header="Kelompok Umur"></Column>
                                                <Column field="lakilaki" header="Laki - Laki"></Column>
                                                <Column field="perempuan" header="Perempuan"></Column>
                                                <Column field="jumlah" header="Jumlah"></Column>
                                            </DataTable>
                                        </template>
                                        <template #footer>

                                        </template>
                                    </Card>




                                </div> -->

                                <!-- <img  src="..\..\Graduation.svg" alt="" class="w-56 h-14"
                                    srcset=""> -->

                            </div>
                        </div>

                        <!-- Kependudukan -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">

                                    <!-- <i class="fas fa-school p-mr-2"></i> -->
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_z4uccqir.json"
                                        background="transparent" speed="1" class="lottieGeografis" loop autoplay>
                                    </lottie-player>
                                    <b style="margin-left: -20px;"> Kependudukan</b>

                                </div>
                            </Divider>

                            <div class="p-grid p-jc-evenly p-flex" style="font-size: 20px;" data-aos="fade-up">

                                <div class="p-col-12 p-md-6 p-lg-3 p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-8">
                                                Penduduk <br>
                                                2224
                                            </div>
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;"
                                                    class="fas fa-users text-blue-500 p-mr-2"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="p-col-12 p-md-6 p-lg-3 p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-8">
                                                Laki - laki <br>
                                                1141
                                            </div>
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;"
                                                    class="fas fa-male p-mr-2 text-indigo-500"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="p-col-12 p-md-6 p-lg-3 p-mr-2 p-order-1 p-order-md-1">
                                    <div class="p-shadow-6">
                                        <div class="p-grid p-p-3">
                                            <div class="p-col-8">
                                                Perempuan <br>
                                                1083
                                            </div>
                                            <div class="p-col-4 p-as-center">
                                                <i style="font-size: 40px;"
                                                    class="fas fa-female p-mr-2 text-pink-500"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>




                            </div>
                            <br>
                            <br>
                            <div class="p-grid p-jc-evenly " data-aos="fade-up">




                                <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="kelompokUmur" stripedRows responsiveLayout="scroll">
                                                <Column field="kelompokUmur" header="Kelompok Umur"></Column>
                                                <Column field="lakilaki" header="Laki - Laki"></Column>
                                                <Column field="perempuan" header="Perempuan"></Column>
                                                <Column field="jumlah" header="Jumlah"></Column>
                                            </DataTable>
                                        </template>
                                        <template #footer>

                                        </template>
                                    </Card>




                                </div>

                                <!-- <img  src="..\..\Graduation.svg" alt="" class="w-56 h-14"
                                    srcset=""> -->

                            </div>
                        </div>


                        <!-- Pendidikan -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">

                                    <!-- <i class="fas fa-school p-mr-2"></i> -->
                                    <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_TBKozE.json"
                                        background="transparent" speed="1" class="lottiePendidikan" loop autoplay>
                                    </lottie-player>
                                    <b> Pendidikan</b>

                                </div>
                            </Divider>


                            <br>
                            <div class="p-grid p-jc-evenly " data-aos="fade-up">
                                <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="fasilitasPendidikan" stripedRows
                                                responsiveLayout="scroll">
                                                <Column field="jenjangPendidikan" header="Jenjang Pendidikan"></Column>
                                                <Column field="negeri" header="Negeri"></Column>
                                                <Column field="swasta" header="Swasta"></Column>
                                            </DataTable>
                                        </template>
                                        <template #footer>

                                        </template>
                                    </Card>




                                </div>

                                <!-- <img  src="..\..\Graduation.svg" alt="" class="w-56 h-14"
                                    srcset=""> -->

                            </div>
                        </div>
                        <br>

                        <!-- Tempat Ibadah -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">

                                    <!-- <i class="fas fa-mosque p-mr-2"></i> -->
                                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_rlgovkcq.json"
                                        background="transparent" speed="1"
                                        style="width: 150px; height: 150px; margin-left: -50px;" loop autoplay>
                                    </lottie-player>
                                    <b> Tempat Ibadah</b>
                                </div>
                            </Divider>
                            <br>
                            <div class="p-grid p-jc-evenly" data-aos="fade-up">

                                <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="tempatIbadah" stripedRows responsiveLayout="scroll">

                                                <Column field="nama" header="Jenis"></Column>
                                                <Column field="jumlah" header="Jumlah"></Column>
                                            </DataTable>

                                        </template>
                                        <template #footer>

                                        </template>
                                    </Card>


                                </div>

                                <!-- <div class="p-col-6 p-as-center ">
                            
                            </div> -->

                            </div>
                        </div>
                        <br>

                        <!-- Fasilitas Kesehatan -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">

                                    <!-- <i class="fas fa-hospital p-mr-2"></i> -->
                                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_pk5mpw6j.json"
                                        background="transparent" speed="1"
                                        style="width: 150px; height: 150px; margin-left: -50px;" loop autoplay>
                                    </lottie-player>
                                    <b> Fasilitas Kesehatan</b>
                                </div>
                            </Divider>
                            <br>

                            <div class="p-grid p-jc-evenly" data-aos="fade-up">

                                <!-- <div class="p-col-6 p-as-center">
                        
                            </div> -->

                                <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="fasilitasKesehatan" stripedRows
                                                responsiveLayout="scroll">
                                                <Column field="nama" header="Jenis"></Column>
                                                <Column field="jumlah" header="Jumlah"></Column>
                                            </DataTable>

                                        </template>
                                        <template #footer>

                                        </template>
                                    </Card>


                                </div>


                            </div>
                        </div>
                        <br>

                        <!-- Pengguna Listrik -->
                        <div>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">
                                    <div style="margin-left: -50px;">
                                        <!-- <i class="fas fa-bolt p-mr-2"></i> -->
                                        <lottie-player
                                            src="https://assets5.lottiefiles.com/private_files/lf30_auYMcO.json"
                                            background="transparent" speed="1" style="width: 150px; height: 150px;" loop
                                            autoplay></lottie-player>
                                    </div>
                                    <b style="margin-left: -30px;"> Pengguna Listrik</b>
                                </div>
                            </Divider>
                            <br>
                            <div class="p-grid p-jc-evenly" data-aos="fade-up">


                                <div class="p-shadow-6">
                                    <Card>
                                        <template #content>
                                            <DataTable :value="penggunaListrik" stripedRows responsiveLayout="scroll">
                                                <Column field="nama" header="Jenis"></Column>
                                                <Column field="jumlah" header="Jumlah"></Column>
                                            </DataTable>

                                        </template>
                                    </Card>
                                </div>
                                <!-- <div class="p-col-6 p-as-center">
                                
                            </div> -->
                            </div>
                        </div>

                        <br>
                        <!-- Custom -->
                        <div id="tamanData">
                            <br>
                            <Divider align="center" type="solid">
                                <div class="p-d-inline-flex p-ai-center lottieFont">
                                    <div style="margin-left: -50px;">
                                        <!-- <i class="fas fa-bolt p-mr-2"></i> -->
                                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_yYOpBn.json"
                                            background="transparent" speed="1" style="width: 150px; height: 150px;" loop
                                            autoplay></lottie-player>
                                    </div>
                                    <b style="margin-left: 0px;"> Taman Data</b>
                                </div>
                            </Divider>
                            <br>
                            <div class="p-grid p-jc-evenly" data-aos="fade-up">


                                <div class="p-col-10 p-mr-2 p-order-1 p-order-md-1">
                                    <!-- Soon :) -->
                                    <div class="p-shadow-6 p-p-4">

                                        <br>
                                        <Dropdown style="width: 100%;" v-model="selectedTahun" :options="tahun"
                                            optionLabel="tahun" placeholder="Pilih Tahun" />

                                        <br><br>
                                        <Dropdown style="width: 100%;" v-model="selectedKategori" :options="kategori"
                                            @change="getJudulOptions()" optionLabel="kategori"
                                            placeholder="Pilih Kategori" />

                                        <br><br>
                                        <Dropdown style="width: 100%;" v-model="selectedJudul" :options="judul"
                                            optionLabel="judul" @change="getVariabel()"
                                            placeholder="Pilih Judul Tabel" />
                                        <br><br>

                                        <DataTable :value="variabelData" responsiveLayout="scroll">
                                            <Column v-for="col of variabelData" :field="col.variabel"
                                                :header="col.variabel" :key="col.variabel">
                                                <template #body="slotProps">
                                                    {{col.values[slotProps.index].value}}
                                                </template>
                                            </Column>
                                        </DataTable>
                                    </div>

                                </div>
                                <!-- <div class="p-col-6 p-as-center">
                                
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="p-col-12 p-md-1 p-lg-1 bgimagecustom">
                <div class="box"></div>
            </div>
            <svg class="footerSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#6C63FF" fill-opacity="1"
                    d="M0,0L60,5.3C120,11,240,21,360,48C480,75,600,117,720,117.3C840,117,960,75,1080,58.7C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>

            <div class="footerCustom">
                <div class="text-white text-center" style="background-color: #6C63FF; width: 100vw;">

                    <div class="">

                        <br>
                        <p class=""> Luaskan ilmu, luaskan manfaat <br>
                            [ ] dengan <span
                                class="animate__animated animate__fadeIn animate__infinite text-red hvr-grow"> ❤
                            </span>
                            di Palu</p>
                    </div>

                    <div>
                        ©2021 — <a href="https://github.com/imamsatya">
                            <img class="animate__animated animate__fadeIn animate__infinite text-red hvr-grow2"
                                src="..\..\dino.svg" width="30" height="30" alt="">

                        </a>
                        Imam Satya Wedhatama
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    // import Chart from 'chart.js'
    export default {
        props: {

            tahun: Object,
            kategori: Object,

        },
        mounted() {
            // this.createChart('myChart', this.ChartDataKualitas)
            AOS.init()

        },
        data() {
            return {
                items: [{
                        label: 'File',
                        icon: 'pi pi-fw pi-file',
                        items: [{
                                label: 'New',
                                icon: 'pi pi-fw pi-plus',
                                items: [{
                                        label: 'Bookmark',
                                        icon: 'pi pi-fw pi-bookmark'
                                    },
                                    {
                                        label: 'Video',
                                        icon: 'pi pi-fw pi-video'
                                    },

                                ]
                            },
                            {
                                label: 'Delete',
                                icon: 'pi pi-fw pi-trash'
                            },
                            {
                                separator: true
                            },
                            {
                                label: 'Export',
                                icon: 'pi pi-fw pi-external-link'
                            }
                        ]
                    },
                    {
                        label: 'Edit',
                        icon: 'pi pi-fw pi-pencil',
                        items: [{
                                label: 'Left',
                                icon: 'pi pi-fw pi-align-left'
                            },
                            {
                                label: 'Right',
                                icon: 'pi pi-fw pi-align-right'
                            },
                            {
                                label: 'Center',
                                icon: 'pi pi-fw pi-align-center'
                            },
                            {
                                label: 'Justify',
                                icon: 'pi pi-fw pi-align-justify'
                            },

                        ]
                    },
                    {
                        label: 'Users',
                        icon: 'pi pi-fw pi-user',
                        items: [{
                                label: 'New',
                                icon: 'pi pi-fw pi-user-plus',

                            },
                            {
                                label: 'Delete',
                                icon: 'pi pi-fw pi-user-minus',

                            },
                            {
                                label: 'Search',
                                icon: 'pi pi-fw pi-users',
                                items: [{
                                        label: 'Filter',
                                        icon: 'pi pi-fw pi-filter',
                                        items: [{
                                            label: 'Print',
                                            icon: 'pi pi-fw pi-print'
                                        }]
                                    },
                                    {
                                        icon: 'pi pi-fw pi-bars',
                                        label: 'List'
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        label: 'Events',
                        icon: 'pi pi-fw pi-calendar',
                        items: [{
                                label: 'Edit',
                                icon: 'pi pi-fw pi-pencil',
                                items: [{
                                        label: 'Save',
                                        icon: 'pi pi-fw pi-calendar-plus'
                                    },
                                    {
                                        label: 'Delete',
                                        icon: 'pi pi-fw pi-calendar-minus'
                                    },

                                ]
                            },
                            {
                                label: 'Archieve',
                                icon: 'pi pi-fw pi-calendar-times',
                                items: [{
                                    label: 'Remove',
                                    icon: 'pi pi-fw pi-calendar-minus'
                                }]
                            }
                        ]
                    },
                    {
                        label: 'Quit',
                        icon: 'pi pi-fw pi-power-off'
                    }
                ],
                // images
                images: [{
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria1.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria1s.jpg",
                        alt: "Description for Image 1",
                        title: "Title 1"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria2.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria2s.jpg",
                        alt: "Description for Image 2",
                        title: "Title 2"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria3.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria3s.jpg",
                        alt: "Description for Image 3",
                        title: "Title 3"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria4.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria4s.jpg",
                        alt: "Description for Image 4",
                        title: "Title 4"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria5.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria5s.jpg",
                        alt: "Description for Image 5",
                        title: "Title 5"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria6.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria6s.jpg",
                        alt: "Description for Image 6",
                        title: "Title 6"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria7.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria7s.jpg",
                        alt: "Description for Image 7",
                        title: "Title 7"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria8.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria8s.jpg",
                        alt: "Description for Image 8",
                        title: "Title 8"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria9.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria9s.jpg",
                        alt: "Description for Image 9",
                        title: "Title 9"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria10.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria10s.jpg",
                        alt: "Description for Image 10",
                        title: "Title 10"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria11.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria11s.jpg",
                        alt: "Description for Image 11",
                        title: "Title 11"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria12.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria12s.jpg",
                        alt: "Description for Image 12",
                        title: "Title 12"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria13.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria13s.jpg",
                        alt: "Description for Image 13",
                        title: "Title 13"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria14.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria14s.jpg",
                        alt: "Description for Image 14",
                        title: "Title 14"
                    },
                    {
                        itemImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria15.jpg",
                        thumbnailImageSrc: "https://primefaces.org/primevue/showcase/demo/images/galleria/galleria15s.jpg",
                        alt: "Description for Image 15",
                        title: "Title 15"
                    }
                ],
                variabelData: null,
                judul: null,
                selectedTahun: null,
                selectedKategori: null,
                selectedJudul: null,
                chartTypes: [{
                        name: 'Pie',
                        code: 'pie'
                    },
                    {
                        name: 'Doughnut',
                        code: 'doughnut'
                    },
                    {
                        name: 'Bar',
                        code: 'bar'
                    },
                    {
                        name: 'Line',
                        code: 'line'
                    },
                    {
                        name: 'Polar Area',
                        code: 'polarArea'
                    },
                    {
                        name: 'Radar',
                        code: 'radar'
                    }
                    // 'pie', 'doughnut', 'bar', 'line', 'polarArea', 'radar'
                ],
                selectedChartType: 'bar',
                basicData: {
                    labels: ['TK', 'RA/BA', 'SD', 'MI', 'SMP', 'MTs', 'SMA', 'MA', 'SMK', 'Akademi/PT'],
                    datasets: [{
                            // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            label: 'Negeri',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            data: [2, 0, 3, 0, 1, 0, 1, 0, 0, 0],
                            pointBackgroundColor: 'rgba(255, 99, 132,1)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgba(255, 99, 132,1)',
                            borderColor: 'rgba(255, 99, 132,1)',

                        },
                        {
                            label: 'Swasta',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            data: [0, 1, 0, 1, 0, 0, 0, 0, 1, 0],
                            pointBackgroundColor: 'rgba(255, 99, 132,1)',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: 'rgba(255, 99, 132,1)',
                            borderColor: 'rgba(255, 99, 132,1)',

                        }
                    ]
                },
                kelompokUmur: [{
                        "kelompokUmur": "0-4",
                        "lakilaki": 75,
                        "perempuan": 62,
                        "jumlah": 137,
                    },
                    {
                        "kelompokUmur": "5-9",
                        "lakilaki": 128,
                        "perempuan": 87,
                        "jumlah": 215,
                    },
                    {
                        "kelompokUmur": "10-14",
                        "lakilaki": 114,
                        "perempuan": 123,
                        "jumlah": 237,
                    },
                    {
                        "kelompokUmur": "15-19",
                        "lakilaki": 119,
                        "perempuan": 95,
                        "jumlah": 214,
                    },
                    {
                        "kelompokUmur": "20-24",
                        "lakilaki": 106,
                        "perempuan": 97,
                        "jumlah": 203,
                    },
                    {
                        "kelompokUmur": "25-29",
                        "lakilaki": 93,
                        "perempuan": 102,
                        "jumlah": 195,
                    },
                    {
                        "kelompokUmur": "30-34",
                        "lakilaki": 79,
                        "perempuan": 76,
                        "jumlah": 155,
                    },
                    {
                        "kelompokUmur": "35-39",
                        "lakilaki": 79,
                        "perempuan": 83,
                        "jumlah": 162,
                    },
                    {
                        "kelompokUmur": "40-44",
                        "lakilaki": 81,
                        "perempuan": 77,
                        "jumlah": 158,
                    },
                    {
                        "kelompokUmur": "45-49",
                        "lakilaki": 78,
                        "perempuan": 96,
                        "jumlah": 174,
                    },
                    {
                        "kelompokUmur": "50-54",
                        "lakilaki": 74,
                        "perempuan": 66,
                        "jumlah": 140,
                    },
                    {
                        "kelompokUmur": "55-59",
                        "lakilaki": 39,
                        "perempuan": 47,
                        "jumlah": 86,
                    },
                    {
                        "kelompokUmur": "60-64",
                        "lakilaki": 36,
                        "perempuan": 30,
                        "jumlah": 66,
                    },
                    {
                        "kelompokUmur": "64 < ",
                        "lakilaki": 40,
                        "perempuan": 42,
                        "jumlah": 82,
                    },
                    {
                        "kelompokUmur": "Jumlah ",
                        "lakilaki": 1141,
                        "perempuan": 1083,
                        "jumlah": 2224,
                    }
                ],
                fasilitasPendidikan: [{
                        "jenjangPendidikan": "TK",
                        "negeri": 2,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "RA/BA",
                        "negeri": 0,
                        "swasta": 1,
                    },
                    {
                        "jenjangPendidikan": "SD",
                        "negeri": 3,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "MI",
                        "negeri": 0,
                        "swasta": 1,
                    },
                    {
                        "jenjangPendidikan": "SMP",
                        "negeri": 1,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "MTs",
                        "negeri": 0,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "SMA",
                        "negeri": 1,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "MA",
                        "negeri": 0,
                        "swasta": 0,
                    },
                    {
                        "jenjangPendidikan": "SMK",
                        "negeri": 0,
                        "swasta": 1,
                    },
                    {
                        "jenjangPendidikan": "Akademi/Perguruan TInggi Negeri",
                        "negeri": 0,
                        "swasta": 0,
                    }
                ],
                tempatIbadah: [{
                        "nama": "Masjid",
                        "jumlah": 3,
                    },
                    {
                        "nama": "Surau/Langgar/Musholla",
                        "jumlah": 3,
                    },
                    {
                        "nama": "Gereja Kristen",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Gereja Katolik",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Kapel",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Pura",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Wihara",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Kelenteng",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Lainnya",
                        "jumlah": 0,
                    },

                ],
                fasilitasKesehatan: [{
                        "nama": "Rumah Sakit",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Rumah Sakit Bersalin",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Puskesmas dengan rawat inap",
                        "jumlah": 1,
                    },
                    {
                        "nama": "Puskesmas tanpa rawat inap",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Puskesmas pembantu",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Poliklinik/balai pengobatan",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Tempat praktek dokter",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Rumah bersalin",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Tempat praktek bidan",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Poskesdes",
                        "jumlah": 1,
                    },
                    {
                        "nama": "Polindes",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Apotek",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Toko khusus obat/jamu",
                        "jumlah": 0,
                    },

                ],
                penggunaListrik: [{
                        "nama": "Keluarga Pengguna Listrik PLN",
                        "jumlah": 774,
                    },
                    {
                        "nama": "Keluarga Pengguna Listrik Non PLN",
                        "jumlah": 0,
                    },
                    {
                        "nama": "Keluarga Bukan Pengguna Listrik",
                        "jumlah": 0,
                    }

                ],
                multiAxisOptions: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    },
                },
                ChartDataKualitas: {

                    data: {
                        labels: ['Jumlah Keluarga Pengguna Listrik PLN', 'Jumlah Keluarga Pengguna Listrik Non PLN',
                            'Jumlah Keluarga bukan Pengguna Listrik'
                        ],
                        datasets: [{ // one line graph
                                type: 'bar',
                                minBarLength: 10,
                                label: 'Jumlah Keluarga Pengguna Listrik',
                                // 5,4,3,2,1
                                data: [774, 0, 0],
                                backgroundColor: [
                                    'rgb(229,49,112)', // Blue
                                    'rgb(229,49,112)',
                                    'rgb(229,49,112)',

                                ],
                                borderColor: [
                                    '#b3174d',
                                    '#b3174d',
                                    '#b3174d',

                                ],
                                borderWidth: 3

                            }

                        ]
                    },
                    options: {
                        legend: {
                            labels: {
                                // This more specific font property overrides the global property

                            }
                        },
                        responsive: true,
                        lineTension: 1,
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            xAxes: [{
                                ticks: {
                                    beginAtZero: false,
                                    padding: 25
                                }
                            }],

                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    padding: 25
                                }
                            }]
                        }
                    }
                }

            }
        },
        methods: {
            async getJudulOptions() {
                console.log(this.selectedTahun, this.selectedKategori)
                // const request = {
                //     tahun: this.selectedTahun,
                //     kategori: this.selectedKategori
                // }
                await axios.get('/judulget', {
                        params: {
                            tahun: this.selectedTahun,
                            kategori: this.selectedKategori
                        }
                    })
                    .then(res => {
                        console.log(res.data, 'res')
                        this.judul = res.data
                    })
            },
            async getVariabel() {
                console.log(this.selectedJudul.id, 'selectedJudul')

                await axios.get('/variabelget/' + this.selectedJudul.id)
                    .then(res => {
                        console.log(res.data, 'res')
                        this.variabelData = res.data
                    })
            },
            // createChart(chartId, chartData) {
            //     console.log('chartId', chartId)
            //     // console.log('chartData', chartData.type)
            //     const ctx = document.getElementById(chartId)
            //     const myChart = new Chart(ctx, {
            //         // type: chartData.type,
            //         data: chartData.data,
            //         options: chartData.options
            //     })
            //     console.log(myChart)
            // },
        }

    }

</script>
<style>
    html {
        scroll-behavior: smooth;

    }

    .media {
        margin-top: -300px;
    }

    .lottieGeografis {
        margin-left: -50px;
        width: 300px;
        height: 300px;
    }

    .lottiePendidikan {
        width: 150px;
        height: 150px;
    }

    .lottieFont {
        font-size: 40px;
        color: #6C63FF;
    }

    .footerCustom {
        margin-top: -115px;
    }

    @media only screen and (max-width: 600px) {
        .media {
            margin-top: -70px;
        }

        .lottieGeografis {
            margin-left: -50px;
            width: 100px;
            height: 100px;
            background-color: #262745;
        }

        .lottieFont {
            font-size: 30px;
        }

        .lottiePendidikan {
            width: 75px;
            height: 75px;
        }

        .footerCustom {
            margin-top: -150px;
            font-size: 14px;
            background-color: #6C63FF;
        }

        .footerSvg {
            height: 300px
        }

    }

    .custom .p-scrollpanel-wrapper {
        border-right: 9px solid #f4f4f4;
    }

    .custom .p-scrollpanel-bar {
        background-color: #1976d2;
        opacity: 1;
        transition: background-color .3s;
    }

    .custom .p-scrollpanel-bar:hover {
        background-color: #135ba1;
    }

    .bgimagecustom {


        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Crect stroke='%23ffffff' stroke-width='.5' width='1' height='1' id='s'/%3E%3Cpattern id='a' width='3' height='3' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cuse fill='%23fafafa' href='%23s' y='2'/%3E%3Cuse fill='%23fafafa' href='%23s' x='1' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s' x='2' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='2'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='1' y='1'/%3E%3C/pattern%3E%3Cpattern id='b' width='7' height='11' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s'/%3E%3Cuse href='%23s' y='5' /%3E%3Cuse href='%23s' x='1' y='10'/%3E%3Cuse href='%23s' x='2' y='1'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='8'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='5' y='2'/%3E%3Cuse href='%23s' x='5' y='6'/%3E%3Cuse href='%23s' x='6' y='9'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='h' width='5' height='13' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s' y='5'/%3E%3Cuse href='%23s' y='8'/%3E%3Cuse href='%23s' x='1' y='1'/%3E%3Cuse href='%23s' x='1' y='9'/%3E%3Cuse href='%23s' x='1' y='12'/%3E%3Cuse href='%23s' x='2'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='2'/%3E%3Cuse href='%23s' x='3' y='6'/%3E%3Cuse href='%23s' x='3' y='11'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='4' y='10'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='c' width='17' height='13' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23e5e5e5'%3E%3Cuse href='%23s' y='11'/%3E%3Cuse href='%23s' x='2' y='9'/%3E%3Cuse href='%23s' x='5' y='12'/%3E%3Cuse href='%23s' x='9' y='4'/%3E%3Cuse href='%23s' x='12' y='1'/%3E%3Cuse href='%23s' x='16' y='6'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='d' width='19' height='17' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ffffff'%3E%3Cuse href='%23s' y='9'/%3E%3Cuse href='%23s' x='16' y='5'/%3E%3Cuse href='%23s' x='14' y='2'/%3E%3Cuse href='%23s' x='11' y='11'/%3E%3Cuse href='%23s' x='6' y='14'/%3E%3C/g%3E%3Cg fill='%23e0e0e0'%3E%3Cuse href='%23s' x='3' y='13'/%3E%3Cuse href='%23s' x='9' y='7'/%3E%3Cuse href='%23s' x='13' y='10'/%3E%3Cuse href='%23s' x='15' y='4'/%3E%3Cuse href='%23s' x='18' y='1'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='e' width='47' height='53' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='2' y='5'/%3E%3Cuse href='%23s' x='16' y='38'/%3E%3Cuse href='%23s' x='46' y='42'/%3E%3Cuse href='%23s' x='29' y='20'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='f' width='59' height='71' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='33' y='13'/%3E%3Cuse href='%23s' x='27' y='54'/%3E%3Cuse href='%23s' x='55' y='55'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='g' width='139' height='97' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='11' y='8'/%3E%3Cuse href='%23s' x='51' y='13'/%3E%3Cuse href='%23s' x='17' y='73'/%3E%3Cuse href='%23s' x='99' y='57'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23b)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23h)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23c)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23d)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23e)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23f)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23g)' width='100%25' height='100%25'/%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }

    .bgimagecustom2 {
        background-color: #ffffff;
        background-image: url("Graduation.svg");
        background-attachment: fixed;
        background-size: cover;
    }

    .hvr-grow {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    .hvr-grow:hover,
    .hvr-grow:focus,
    .hvr-grow:active {
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }

    .hvr-grow2 {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
    }

    .hvr-grow2:hover,
    .hvr-grow2:focus,
    .hvr-grow2:active {
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }

    /* Underline From Left */
    .hvr-underline-from-left {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        position: relative;
        overflow: hidden;
    }

    .hvr-underline-from-left:before {
        content: "";
        position: absolute;
        z-index: -1;
        left: 0;
        right: 100%;
        bottom: 0;
        background: white;
        height: 2px;
        -webkit-transition-property: right;
        transition-property: right;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .hvr-underline-from-left:hover:before,
    .hvr-underline-from-left:focus:before,
    .hvr-underline-from-left:active:before {
        right: 0;
    }

</style>
