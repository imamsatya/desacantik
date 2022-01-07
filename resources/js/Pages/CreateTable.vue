<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Table
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <div class="card">



                                <div class="p-grid p-d-flex p-jc-center" data-aos="fade-up">
                                    <div class="p-col-12 p-mr-2 p-order-1 p-order-md-1">
                                        <!-- Manage Variabel -->
                                        <Dropdown v-model="selectedJudul" :options="judul" @change="getVariabel()"
                                            optionLabel="judul" placeholder="Pilih Judul" />
                                        <br><br>
                                        <Toolbar class="p-mb-4">
                                            <template #left>
                                                <Button label="New" icon="pi pi-plus" class="p-button-success p-mr-2"
                                                    @click="openNewVariabelDialog" />
                                                <Button label="Delete" icon="pi pi-trash" class="p-button-danger"
                                                    @click="confirmDeleteSelectedVariabel"
                                                    :disabled="!selectedVariabel || !selectedVariabel.length" />
                                            </template>
                                        </Toolbar>

                                        <DataTable :value="variabelData" v-model:selection="selectedVariabel"
                                            dataKey="id" :paginator="true" :rows="10" :filters="filters"
                                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                                            :rowsPerPageOptions="[5,10,25]"
                                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
                                            responsiveLayout="scroll">
                                            <template #header>
                                                <div
                                                    class="table-header p-d-flex p-flex-column p-flex-md-row p-jc-md-between">
                                                    <h5 class="p-mb-2 p-m-md-0 p-as-md-center">Manage Variabel</h5>
                                                    <span class="p-input-icon-left">
                                                        <i class="pi pi-search" />
                                                        <InputText v-model="filters['global'].value"
                                                            placeholder="Search..." />
                                                    </span>
                                                </div>
                                            </template>

                                            <Column selectionMode="multiple" style="width: 3rem" :exportable="false">
                                            </Column>
                                            <Column field="variabel" header="Variabel" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>


                                        </DataTable>
                                        <Dialog :visible="variabelDialog" header="Tambah Variabel" class="p-fluid">

                                            <div class="p-field">
                                                <label for="name">Variabel</label>
                                                <InputText type="text" v-model="newVariabel" />
                                            </div>

                                            <template #footer>
                                                <Button label="Cancel" icon="pi pi-times" class="p-button-text"
                                                    @click="variabelDialog = false" />
                                                <Button label="Save" icon="pi pi-check" class="p-button-text"
                                                    @click="saveVariabel()" />
                                            </template>
                                        </Dialog>

                                        <br><br>

                                    </div>
                                </div>
                                <Divider />
                                <br>
                                <div class="p-grid p-d-flex p-jc-center" data-aos="fade-up">
                                    <div class="p-col-12 p-mr-2 p-order-1 p-order-md-1">

                                        <!-- Manage Values -->
                                   
                                        <br><br>
                                        <Toolbar class="p-mb-4">
                                            <template #left>
                                                <Button label="New" icon="pi pi-plus" class="p-button-success p-mr-2"
                                                    @click="openNewValueDialog" />
                                                <Button label="Delete" icon="pi pi-trash" class="p-button-danger"
                                                    @click="confirmDeleteSelectedValue"
                                                    :disabled="!selectedValue || !selectedValue.length" />
                                            </template>
                                        </Toolbar>

                                        <DataTable :value="valueData" v-model:selection="selectedValue" dataKey="id"
                                            :paginator="true" :rows="10" :filters="filters"
                                            paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                                            :rowsPerPageOptions="[5,10,25]"
                                            currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
                                            responsiveLayout="scroll">
                                            <template #header>
                                                <div
                                                    class="table-header p-d-flex p-flex-column p-flex-md-row p-jc-md-between">
                                                    <h5 class="p-mb-2 p-m-md-0 p-as-md-center">Manage Value</h5>
                                                    <span class="p-input-icon-left">
                                                        <i class="pi pi-search" />
                                                        <InputText v-model="filters['global'].value"
                                                            placeholder="Search..." />
                                                    </span>
                                                </div>
                                            </template>

                                            <Column selectionMode="multiple" style="width: 3rem" :exportable="false">
                                            </Column>
                                            <Column field="index" header="Index" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>
                                            <Column field="value" header="Value" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>
                                            <Column field="variabel_id" header="Variabel ID" :sortable="true"
                                                style="min-width:12rem">
                                            </Column>


                                        </DataTable>
                                        <Dialog :visible="valueDialog" header="Tambah Value" class="p-fluid">
                                            <!-- {{this.variabelData}} -->
                                            <div class="p-field" v-for="(item, index) in variabelData" :key="index">
                                        
                                                <label for="name">{{item.variabel}}</label>
                                                <InputText type="text" v-model="newValue[index]"
                                                    @change="valuedynamic(item, newValue[index])" />
                                            </div>

                                            <template #footer>
                                                <Button label="Cancel" icon="pi pi-times" class="p-button-text"
                                                    @click="valueDialog = false" />
                                                <Button label="Save" icon="pi pi-check" class="p-button-text"
                                                    @click="saveValue()" />
                                            </template>
                                        </Dialog>

                                        <!-- <table style="width:100%">
                                            <tr>
                                                <th v-for="(item, index) in this.variabelData" :key="index">
                                                    {{item.variabel}} 
                                                </th>
                                            </tr>
                                            <tr>
                                                
                                                <td v-for="(item, index) in this.variabelData" :key="index">
                                                    <p v-for="(item2, index) in item.values">
                                                        {{item2.value}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table> -->

                                        <DataTable :value="variabelData" responsiveLayout="scroll"> 
                                            <Column v-for="col of variabelData" :field="col.variabel" :header="col.variabel" :key="col.variabel">
                                                <template #body="slotProps">
                                                    {{col.values[slotProps.index].value}}     
                                                </template>
                                            </Column>
                                        </DataTable>

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
            judul: Object,
            variabelData: Object
        },
        components: {
            BreezeAuthenticatedLayout,
        },
        data() {
            return {
                filters: {},
                dataTahun: null,
                selectedTahun: null,

                selectedJudul: null,

                selectedVariabel: null,
                variabelDialog: false,
                newVariabel: null,

                variabelData: null,
                selectedVariabelDropdown: null,

                valueData: null,

                selectedValue: null,
                valueDialog: false,
                newValue: [],
                collectedValue: []
            }
        },
        created() {
            this.initFilters()
        },
        methods: {
            openNewVariabelDialog() {
                this.variabelDialog = true
                console.log(this.tahunDialog)
            },
            openNewValueDialog() {
                this.valueDialog = true
                console.log(this.tahunDialog)
            },
            saveVariabel() {
                console.log(this.newTahun, 'this')
                // console.log(data)
                this.$inertia.post('/variabelpost', {
                    'variabel': this.newVariabel,
                    'judul': this.selectedJudul
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
                        this.variabelDialog = false

                    },
                    onError: (errors) => {
                        // Handle validation errors
                        console.log('onError', errors)

                        this.sending = false
                        this.variabelDialog = false

                    },
                    onFinish: () => {

                        this.sending = false
                        this.variabelDialog = false

                    }
                })
            },
           async  getVariabel() {
                console.log(this.selectedJudul.id, 'selectedJudul')
               
               await axios.get('/variabelget/' + this.selectedJudul.id)
                    .then(res => {
                        console.log(res.data, 'res')
                        this.variabelData = res.data
                    })
            },
            saveValue() {
                console.log(this.collectedValue, 'collectedValue')
                this.$inertia.post('/valuepost', {
                    'value': this.collectedValue,
                    // 'judul': this.selectedJudul
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
                        this.variabelDialog = false

                    },
                    onError: (errors) => {
                        // Handle validation errors
                        console.log('onError', errors)

                        this.sending = false
                        this.variabelDialog = false

                    },
                    onFinish: () => {

                        this.sending = false
                        this.variabelDialog = false

                    }
                })
            },
            valuedynamic(data, newValue) {
                var a = [{
                    'variabelId': data.id,
                    'label': data.variabel,
                    'value': newValue
                }]
                this.collectedValue.push(a)
            },
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
