<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard Taman Data
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <div class="card">
                                <Toast />
                                <ConfirmDialog></ConfirmDialog>
                                <div class="p-grid p-d-flex p-jc-center" data-aos="fade-up">
                                    <!-- Manage Tahun -->
                                    <div class="p-col-5 p-mr-2 p-order-1 p-order-md-1">
                                        <Toolbar class="p-mb-4">
                                            <template #left>
                                                <Button label="New" icon="pi pi-plus" class="p-button-success p-mr-2"
                                                    @click="openNewTahunDialog" />
                                                <Button label="Delete" icon="pi pi-trash" class="p-button-danger"
                                                    @click="confirmDeleteSelectedTahun"
                                                    :disabled="!selectedTahun || !selectedTahun.length" />
                                            </template>
                                        </Toolbar>

                                        <DataTable :value="tahun" v-model:selection="selectedTahun" dataKey="id" stripedRows
                                            :paginator="true" :rows="10" :filters="filters"
                                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                                            :rowsPerPageOptions="[5,10,25]"
                                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
                                            responsiveLayout="scroll" columnResizeMode="expand" showGridlines>
                                            <template #header>
                                                <div
                                                    class="table-header p-d-flex p-flex-column p-flex-md-row p-jc-md-between">
                                                    <h5 class="p-mb-2 p-m-md-0 p-as-md-center">Manage Tahun</h5>
                                                    <span class="p-input-icon-left">
                                                        <i class="pi pi-search" />
                                                        <InputText v-model="filters['global'].value"
                                                            placeholder="Search..." />
                                                    </span>
                                                </div>
                                            </template>

                                            <Column selectionMode="multiple" headerStyle="width: 3rem"
                                                :exportable="false">
                                            </Column>
                                            <Column field="tahun" header="Tahun" :sortable="true">
                                            </Column>


                                        </DataTable>

                                        <Dialog :visible="tahunDialog" header="Tambah Tahun" class="p-fluid">

                                            <div class="p-field">
                                                <label for="name">Tahun</label>
                                                <InputText type="text" v-model="newTahun" />
                                                <!-- <InputText id="name" v-model.trim="product.name" required="true" autofocus
                                                        :class="{'p-invalid': submitted && !product.name}" />
                                                    <small class="p-error" v-if="submitted && !product.name">Name is required.</small> -->
                                            </div>

                                            <template #footer>
                                                <Button label="Cancel" icon="pi pi-times" class="p-button-text"
                                                    @click="tahunDialog = false" />
                                                <Button label="Save" icon="pi pi-check" class="p-button-text"
                                                    @click="saveTahun()" />
                                            </template>
                                        </Dialog>
                                    </div>

                                    <!-- Manage Kategori -->
                                    <div class="p-col-5 p-mr-2 p-order-1 p-order-md-1">
                                        <Toolbar class="p-mb-4">
                                            <template #left>
                                                <Button label="New" icon="pi pi-plus" class="p-button-success p-mr-2"
                                                    @click="openNewKategoriDialog" />
                                                <Button label="Delete" icon="pi pi-trash" class="p-button-danger"
                                                    @click="confirmDeleteSelectedKategori"
                                                    :disabled="!selectedKategori || !selectedKategori.length" />
                                            </template>
                                        </Toolbar>

                                        <DataTable :value="kategori" v-model:selection="selectedKategori" dataKey="id"
                                            :paginator="true" :rows="10" :filters="filters"
                                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                                            :rowsPerPageOptions="[5,10,25]"
                                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
                                            responsiveLayout="scroll">
                                            <template #header>
                                                <div
                                                    class="table-header p-d-flex p-flex-column p-flex-md-row p-jc-md-between">
                                                    <h5 class="p-mb-2 p-m-md-0 p-as-md-center">Manage Kategori</h5>
                                                    <span class="p-input-icon-left">
                                                        <i class="pi pi-search" />
                                                        <InputText v-model="filters['global'].value"
                                                            placeholder="Search..." />
                                                    </span>
                                                </div>
                                            </template>

                                            <Column selectionMode="multiple" style="width: 3rem" :exportable="false">
                                            </Column>
                                            <Column field="kategori" header="Kategori" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>

                                        </DataTable>

                                        <Dialog :visible="kategoriDialog" header="Tambah Kategori" class="p-fluid">

                                            <div class="p-field">
                                                <label for="name">Kategori</label>
                                                <InputText type="text" v-model="newKategori" />
                                            </div>

                                            <template #footer>
                                                <Button label="Cancel" icon="pi pi-times" class="p-button-text"
                                                    @click="kategoriDialog = false" />
                                                <Button label="Save" icon="pi pi-check" class="p-button-text"
                                                    @click="saveKategori()" />
                                            </template>
                                        </Dialog>
                                    </div>
                                </div>

                                <br><br>

                                <!-- Manage Judul -->

                                <div class="p-grid p-d-flex p-jc-center" data-aos="fade-up">
                                    <div class="p-col-10 p-mr-2 p-order-1 p-order-md-1">
                                        <Toolbar class="p-mb-4">
                                            <template #left>
                                                <Button label="New" icon="pi pi-plus" class="p-button-success p-mr-2"
                                                    @click="openNewJudulDialog" />
                                                <Button label="Delete" icon="pi pi-trash" class="p-button-danger"
                                                    @click="confirmDeleteSelectedJudul"
                                                    :disabled="!selectedJudul || !selectedJudul.length" />
                                            </template>
                                        </Toolbar>

                                        <!-- {{this.judul}} -->

                                        <DataTable :value="judul" v-model:selection="selectedJudul" dataKey="id"
                                            :paginator="true" :rows="10" :filters="filters"
                                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                                            :rowsPerPageOptions="[5,10,25]"
                                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
                                            responsiveLayout="scroll">
                                            <template #header>
                                                <div
                                                    class="table-header p-d-flex p-flex-column p-flex-md-row p-jc-md-between">
                                                    <h5 class="p-mb-2 p-m-md-0 p-as-md-center">Manage Judul</h5>
                                                    <span class="p-input-icon-left">
                                                        <i class="pi pi-search" />
                                                        <InputText v-model="filters['global'].value"
                                                            placeholder="Search..." />
                                                    </span>
                                                </div>
                                            </template>

                                            <Column selectionMode="multiple" style="width: 3rem" :exportable="false">
                                            </Column>
                                            <Column field="judul" header="Judul" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>
                                            <Column field="kategori.kategori" header="Kategori" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>
                                            <Column field="tahun.tahun" header="Tahun" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>

                                        </DataTable>

                                        <Dialog :visible="judulDialog" header="Tambah Judul" class="p-fluid">

                                            <div class="p-field">
                                                 <Dropdown v-model="selectedTahunJ" :options="tahun" optionLabel="tahun" placeholder="Tahun" />
                                                 <br>
                                                 <Dropdown v-model="selectedKategoriJ" :options="kategori" optionLabel="kategori" placeholder="Kategori" />   
                                                    <br>
                                                <label for="name">Judul</label>
                                                <InputText type="text" v-model="newJudul" />
                                                <!-- <InputText id="name" v-model.trim="product.name" required="true" autofocus
                                                        :class="{'p-invalid': submitted && !product.name}" />
                                                    <small class="p-error" v-if="submitted && !product.name">Name is required.</small> -->
                                            </div>

                                            <template #footer>
                                                <Button label="Cancel" icon="pi pi-times" class="p-button-text"
                                                    @click="judulDialog = false" />
                                                <Button label="Save" icon="pi pi-check" class="p-button-text"
                                                    @click="saveJudul()" />
                                            </template>
                                        </Dialog>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'
    import {
        FilterMatchMode
    } from 'primevue/api';

    export default {
        props: {

            tahun: Object,
            kategori: Object,
            judul: Object
        },
        components: {
            BreezeAuthenticatedLayout,
        },
        data() {
            return {
                openNewTahun: false,
                filters: {},
                dataTahun: null,
                selectedTahun: null,
                tahunDialog: false,
                newTahun: null,

                 selectedKategori: null,
                 kategoriDialog: false,
                newKategori: null,

                selectedJudul: null,
                judulDialog: false,
                newJudul: null,

                selectedTahunJ: '',
                selectedKategoriJ: ''
            }
        },
        created() {
            this.initFilters()
        },
        methods: {
            openNewTahunDialog() {
                this.tahunDialog = true
                console.log(this.tahunDialog)
            },
            openNewKategoriDialog() {
                this.kategoriDialog = true
                console.log(this.tahunDialog)
            },
            openNewJudulDialog() {
                this.judulDialog = true
                console.log(this.tahunDialog)
            },
            confirmDeleteSelectedTahun(){
                console.log('selectedTahun', this.selectedTahun)
                this.$confirm.require({
                    message: 'Apakah yakin akan di hapus semua?',
                    header: 'Multiple Delete Confirmation',
                    icon: 'pi pi-info-circle',
                    acceptClass: 'p-button-primary',
                    accept: () => {

                        this.$inertia.post('/deletemultipletahun', this.selectedTahun, {
                            onStart: () => {
                                this.sending = true
                            },
                            onProgress: (progressEvent) => {
                                //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                                this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                        100) /
                                    progressEvent.total))
                                console.log(progressEvent.loaded)
                                console.log('Upload Progress: ', this.progressBar)
                            },

                            onSuccess: (response) => {
                                // Handle success event
                                console.log('onSuccess', response)
                                // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                                this.sending = false
                                this.selectedDokumens = []
                                 this.$toast.add({
                            severity: 'info',
                            summary: 'Confirmed',
                            detail: ' Berhasil di Delete',
                            life: 3000
                        });
                            },
                            onError: (errors) => {
                                // Handle validation errors
                                console.log('onError', errors)

                                this.sending = false

                            },
                            onFinish: () => {
                                
                            }
                        })
                       
                    },
                    reject: () => {
                        this.$toast.add({
                            severity: 'error',
                            summary: 'Rejected',
                            detail: 'You have rejected',
                            life: 3000
                        });
                    }
                });
            },
            confirmDeleteSelectedKategori(){
                console.log('selectedTahun', this.selectedTahun)
                this.$confirm.require({
                    message: 'Apakah yakin akan di hapus semua?',
                    header: 'Multiple Guillotine Confirmation',
                    icon: 'pi pi-info-circle',
                    acceptClass: 'p-button-primary',
                    accept: () => {

                        this.$inertia.post('/deletemultiplekategori', this.selectedKategori, {
                            onStart: () => {
                                this.sending = true
                            },
                            onProgress: (progressEvent) => {
                                //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                                this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                        100) /
                                    progressEvent.total))
                                console.log(progressEvent.loaded)
                                console.log('Upload Progress: ', this.progressBar)
                            },

                            onSuccess: (response) => {
                                // Handle success event
                                console.log('onSuccess', response)
                                // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                                this.sending = false
                                this.selectedDokumens = []

                            },
                            onError: (errors) => {
                                // Handle validation errors
                                console.log('onError', errors)

                                this.sending = false

                            },
                            onFinish: () => {

                                this.sending = false

                            }
                        })
                        this.$toast.add({
                            severity: 'info',
                            summary: 'Confirmed',
                            detail: ' Berhasil di Guillotine',
                            life: 3000
                        });
                    },
                    reject: () => {
                        this.$toast.add({
                            severity: 'error',
                            summary: 'Rejected',
                            detail: 'You have rejected',
                            life: 3000
                        });
                    }
                });
            },
            confirmDeleteSelectedJudul(){
                console.log('selectedTahun', this.selectedJudul)
                this.$confirm.require({
                    message: 'Apakah yakin akan di hapus semua?',
                    header: 'Multiple Guillotine Confirmation',
                    icon: 'pi pi-info-circle',
                    acceptClass: 'p-button-primary',
                    accept: () => {

                        this.$inertia.post('/deletemultiplejudul', this.selectedJudul, {
                            onStart: () => {
                                this.sending = true
                            },
                            onProgress: (progressEvent) => {
                                //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                                this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                        100) /
                                    progressEvent.total))
                                console.log(progressEvent.loaded)
                                console.log('Upload Progress: ', this.progressBar)
                            },

                            onSuccess: (response) => {
                                // Handle success event
                                console.log('onSuccess', response)
                                // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                                this.sending = false
                                this.selectedDokumens = []

                            },
                            onError: (errors) => {
                                // Handle validation errors
                                console.log('onError', errors)

                                this.sending = false

                            },
                            onFinish: () => {

                                this.sending = false

                            }
                        })
                        this.$toast.add({
                            severity: 'info',
                            summary: 'Confirmed',
                            detail: ' Berhasil di Guillotine',
                            life: 3000
                        });
                    },
                    reject: () => {
                        this.$toast.add({
                            severity: 'error',
                            summary: 'Rejected',
                            detail: 'You have rejected',
                            life: 3000
                        });
                    }
                });
            },
            saveTahun() {
                console.log(this.newTahun, 'this')
                // console.log(data)
                this.$inertia.post('/tahunpost', {
                    'tahun': this.newTahun
                }, {
                    onStart: () => {
                        this.sending = true
                    },
                    onProgress: (progressEvent) => {
                        //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                        this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                100) /
                            progressEvent.total))
                        console.log(progressEvent.loaded)
                        console.log('Upload Progress: ', this.progressBar)
                    },

                    onSuccess: (response) => {
                        // Handle success event
                        console.log('onSuccess', response)
                        // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                        this.sending = false
                        this.tahunDialog = false

                    },
                    onError: (errors) => {
                        // Handle validation errors
                        console.log('onError', errors)

                        this.sending = false
                        this.tahunDialog = false

                    },
                    onFinish: () => {

                        this.sending = false
                        this.tahunDialog = false

                    }
                })
            },
            saveKategori() {
                console.log(this.newKategori, 'this')
                // console.log(data)
                this.$inertia.post('/kategoripost', {
                    'kategori': this.newKategori
                }, {
                    onStart: () => {
                        this.sending = true
                    },
                    onProgress: (progressEvent) => {
                        //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                        this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                100) /
                            progressEvent.total))
                        console.log(progressEvent.loaded)
                        console.log('Upload Progress: ', this.progressBar)
                    },

                    onSuccess: (response) => {
                        // Handle success event
                        console.log('onSuccess', response)
                        // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                        this.sending = false
                        this.kategoriDialog = false

                    },
                    onError: (errors) => {
                        // Handle validation errors
                        console.log('onError', errors)

                        this.sending = false
                        this.kategoriDialog = false

                    },
                    onFinish: () => {

                        this.sending = false
                        this.kategoriDialog = false

                    }
                })
            },
            saveJudul() {
                console.log(this.newKategori, 'this')
                // console.log(data)
                this.$inertia.post('/judulpost', {
                    'kategori': this.selectedKategoriJ,
                    'tahun': this.selectedTahunJ,
                    'judul': this.newJudul
                }, {
                    onStart: () => {
                        this.sending = true
                    },
                    onProgress: (progressEvent) => {
                        //DATA TERSEBUT AKAN DI ASSIGN KE VARIABLE progressBar
                        this.progressBar = parseInt(Math.round((progressEvent.loaded *
                                100) /
                            progressEvent.total))
                        console.log(progressEvent.loaded)
                        console.log('Upload Progress: ', this.progressBar)
                    },

                    onSuccess: (response) => {
                        // Handle success event
                        console.log('onSuccess', response)
                        // this.$toast.add({severity:'success', summary: 'Yeay, Berhasil', detail:'Pesan Berhasil Dikirim', life: 3000});

                        this.sending = false
                        this.judulDialog = false

                    },
                    onError: (errors) => {
                        // Handle validation errors
                        console.log('onError', errors)

                        this.sending = false
                        this.judulDialog = false

                    },
                    onFinish: () => {

                        this.sending = false
                        this.judulDialog = false

                    }
                })
            },
            // hideDialog(){
            //     this.tahunDialog = false
            // },
            initFilters() {
                this.filters = {
                    'global': {
                        value: null,
                        matchMode: FilterMatchMode.CONTAINS
                    },
                }
            }
        }
    }

</script>
