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
        chatflowid: "a72a2e57-a82f-4749-a649-d9a7a5406013",
        apiHost: "http://localhost:3000",
        chatflowConfig: {
            // topK: 2
        },
        theme: {
            button: {
                backgroundColor: "#3B81F6",
                right: 20,
                bottom: 20,
                size: 48, // small | medium | large | number
                dragAndDrop: true,
                iconColor: "white",
                customIconSrc: "https://raw.githubusercontent.com/walkxcode/dashboard-icons/main/svg/google-messages.svg",
                autoWindowOpen: {
                    autoOpen: true, //parameter to control automatic window opening
                    openDelay: 2, // Optional parameter for delay time in seconds
                    autoOpenOnMobile: false, //parameter to control automatic window opening in mobile
                    },
            },
            tooltip: {
                showTooltip: true,
                tooltipMessage: 'Hallo bjirr 👋!',
                tooltipBackgroundColor: 'black',
                tooltipTextColor: 'white',
                tooltipFontSize: 16,
            },
            chatWindow: {
                showTitle: true,
                title: 'Iris Bot',
                titleAvatarSrc: 'data:image/png;base64,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',
                showAgentMessages: true,
                welcomeMessage: 'Hello! Aku iris asisten kesayanganmu!',
                errorMessage: 'Gua ga tau Njiirrr!!!!',
                backgroundColor: "#ffffff",
                backgroundImage: 'enter image path or link', // If set, this will overlap the background color of the chat window.
                height: 700,
                width: 400,
                fontSize: 16,
                //starterPrompts: ['What is a bot?', 'Who are you?'], // It overrides the starter prompts set by the chat flow passed
                starterPromptFontSize: 15,
                clearChatOnReload: false, // If set to true, the chat will be cleared when the page reloads.
                botMessage: {
                    backgroundColor: "#f7f8ff",
                    textColor: "#303235",
                    showAvatar: true,
                    avatarSrc: "data:image/png;base64,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",
                },
                userMessage: {
                    backgroundColor: "#5a5a5a",
                    textColor: "#ffffff",
                    showAvatar: true,
                    avatarSrc: "https://raw.githubusercontent.com/zahidkhawaja/langchain-chat-nextjs/main/public/usericon.png",
                },
                textInput: {
                    placeholder: 'Type your question',
                    backgroundColor: '#ffffff',
                    textColor: '#303235',
                    sendButtonColor: '#3B81F6',
                    maxChars: 100,
                    maxCharsWarningMessage: 'pelan pelan cokk, masukkin kurang dari 50 karakter yaa njirr',
                    autoFocus: true, // If not used, autofocus is disabled on mobile and enabled on desktop. true enables it on both, false disables it on both.
                    sendMessageSound: true,
                    // sendSoundLocation: "send_message.mp3", // If this is not used, the default sound effect will be played if sendSoundMessage is true.
                    receiveMessageSound: true,
                    // receiveSoundLocation: "receive_message.mp3", // If this is not used, the default sound effect will be played if receiveSoundMessage is true. 
                },
                feedback: {
                    color: '#303235',
                },
                footer: {
                    textColor: '#303235',
                    text: '',
                    company: '',
                    companyLink: '',
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
