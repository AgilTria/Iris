<x-app-layout>
    <x-slot:page>Dashboard</x-slot:page>

    {{-- Heroes --}}
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center g-4">
                <div class="col-lg-3 col-xxl-2">
                    <img src="{{ asset('images/img-dashboard.svg') }}" class="img-fluid opacity-85" alt="images" loading="lazy">
                </div>
                <div class="col-lg-9 col-xxl-10">
                    <h5 class="text-secondary">
                        Selamat datang kembali <span class="fw-semibold">{{ auth()->user()->nama_user }}</span> di <span class="fw-semibold">{{ config('app.name') }}</span>!
                    </h5>
                    <p class="lead-dashboard">{{ config('app.name') }} adalah aplikasi berbasis web yang digunakan untuk memudahkan dalam melakukan pencatatan dan pengontrolan stok barang, pencatatan transaksi barang masuk dan barang keluar, serta mempercepat dalam proses pembuatan laporan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-card-no-pd">
        {{-- menampilkan informasi jumlah data barang --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-box-multiple text-primary"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Data Barang</p>
                                {{-- tampilkan data --}}
                                <h4 class="card-title">{{ $totalBarang }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- menampilkan informasi total data barang masuk --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-transfer-in text-teal"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Data Barang Masuk</p>
                                {{-- tampilkan data --}}
                                <h4 class="card-title">{{ $totalBarangMasuk }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- menampilkan informasi total data barang keluar --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-transfer-out text-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Data Barang Keluar</p>
                                {{-- tampilkan data --}}
                                <h4 class="card-title">{{ $totalBarangKeluar }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-card-no-pd">
        {{-- menampilkan informasi jumlah data jenis barang --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-category text-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Data Jenis Barang</p>
                                {{-- tampilkan data --}}
                                <h4 class="card-title">{{ $totalJenis }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- menampilkan informasi total data satuan --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-folders text-secondary"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Data Satuan</p>
                                {{-- tampilkan data --}}
                                <h4 class="card-title">{{ $totalSatuan }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- menampilkan informasi total data pengguna aplikasi --}}
        <div class="col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i style="font-size:3rem" class="ti ti-user text-teal"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Pengguna Aplikasi</p>
                               
                                <h4 class="card-title">{{ $totalUser }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- menampilkan informasi stok barang telah mencapai batas minimum --}}
    <div class="card">
        <div class="card-body">
            {{-- judul tabel --}}
            <div class="alert alert-secondary alert-title d-flex align-items-center mb-4" role="alert">
                <i class="ti ti-info-circle fs-5 me-2"></i> Stok barang telah mencapai batas minimum
            </div>

            {{-- tabel tampil data --}}
            <div class="table-responsive border rounded mb-2">
                <table class="table align-middle text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($barang as $data)
                        {{-- jika data ada, tampilkan data --}}
                        <tr>
                            <td width="30">{{ $no++ }}</td>
                            <td width="80">{{ $data->id }}</td>
                            <td width="200">{{ $data->nama_barang }}</td>
                            <td width="180">{{ $data->jenis->nama_jenis }}</td>
                            <td width="100">{{ $data->stok }}</td>
                            <td width="120">{{ $data->satuan->nama_satuan }}</td>
                        </tr>
                    @empty
                        {{-- jika data tidak ada, tampilkan pesan data tidak tersedia --}}
                        <tr>
                            <td colspan="6">
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="ti ti-info-circle fs-5 me-2"></i>
                                    <div>Tidak ada data tersedia tuan.</div>
                                </div>
                            </td>
                        </tr>
                    @endforelse

                    <script type="module">
    import Chatbot from "https://cdn.jsdelivr.net/npm/flowise-embed/dist/web.js"
    Chatbot.init({
        chatflowid: "8a8b5c80-b6d6-423d-bfa6-ac56d9fc0774",
        apiHost: "http://localhost:3000",
        chatflowConfig: {
            // topK: 2
        },
        theme: {
            button: {
                backgroundColor: "#6a4c93",  // Ungu
                right: 20,
                bottom: 20,
                size: 48,
                dragAndDrop: true,
                iconColor: "white",
                customIconSrc: "https://raw.githubusercontent.com/walkxcode/dashboard-icons/main/svg/google-messages.svg",
                autoWindowOpen: {
                    autoOpen: true,
                    openDelay: 2,
                    autoOpenOnMobile: false,
                },
            },
            tooltip: {
                showTooltip: true,
                tooltipMessage: 'Hi There 👋!',
                tooltipBackgroundColor: '#6a4c93',  // Ungu
                tooltipTextColor: 'white',
                tooltipFontSize: 16,
            },
            chatWindow: {
                showTitle: true,
                title: 'Iris Assistant',  // Ganti nama chatbot menjadi IRIS
                titleAvatarSrc: 'https://raw.githubusercontent.com/walkxcode/dashboard-icons/main/svg/google-messages.svg',
                showAgentMessages: true,
                welcomeMessage: 'Hello! Aku Iris assistant, Asisten kesayanganmu!!.',
                errorMessage: 'An error occurred, please try again.',
                backgroundColor: "#fff",  // Putih
                height: 700,
                width: 400,
                fontSize: 16,
                starterPromptFontSize: 15,
                clearChatOnReload: false,
                botMessage: {
                    backgroundColor: "#f2f3f5",  // Putih ke abu-abu terang
                    textColor: "#303235",
                    showAvatar: true,
                    avatarSrc: "https://raw.githubusercontent.com/zahidkhawaja/langchain-chat-nextjs/main/public/parroticon.png",
                },
                userMessage: {
                    backgroundColor: "#FFEB3B",  // Kuning
                    textColor: "#303235",
                    showAvatar: true,
                    avatarSrc: "https://raw.githubusercontent.com/zahidkhawaja/langchain-chat-nextjs/main/public/usericon.png",
                },
                textInput: {
                    placeholder: 'Type your question',
                    backgroundColor: '#fff',  // Putih
                    textColor: '#303235',
                    sendButtonColor: '#6a4c93',  // Ungu
                    maxChars: 1000,
                    maxCharsWarningMessage: 'You exceeded the characters limit. Please input less than 100 characters.',
                    autoFocus: true,
                    sendMessageSound: true,
                    receiveMessageSound: true,
                },
                feedback: {
                    color: '#303235',
                },
                footer: {
                    textColor: '#303235',
                    
                    company: 'IRIS',
                    
                }
            }
        }
    })
</script>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
