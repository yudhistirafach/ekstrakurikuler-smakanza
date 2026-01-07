<div class="bg-white dark:bg-[#1e293b] rounded-xl border border-[#e7ecf4] dark:border-slate-700 shadow-sm p-6 sm:p-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-[#0d131c] dark:text-white flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">edit_document</span>
            Daftar Ekstrakurikuler Baru
        </h2>
        <span
            class="text-xs font-medium bg-gray-100 dark:bg-slate-700 text-gray-600 dark:text-slate-300 px-2 py-1 rounded">Step
            1 of 1</span>
    </div>
    <form action="#" class="space-y-6" onsubmit="event.preventDefault();">
        <!-- Activity Selection (Rich Select) -->
        <div class="space-y-2">
            <label class="block text-sm font-medium text-[#0d131c] dark:text-white" for="ekskul">Pilih Ekstrakurikuler
                <span class="text-red-500">*</span></label>
            <div class="relative">
                <span
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-gray-500 z-10 material-symbols-outlined text-[20px] transition-colors">search</span>
                <select
                    class="block w-full rounded-lg border-[#ced8e8] dark:border-slate-600 bg-white dark:bg-slate-800 dark:text-white pl-10 pr-12 py-3 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 shadow-sm disabled:bg-gray-100 disabled:cursor-not-allowed transition-all duration-200 appearance-none cursor-pointer hover:border-primary/50"
                    id="ekskul" name="ekskul">
                    <option disabled="" selected="" value="" class="text-gray-500">Cari atau pilih kegiatan...
                    </option>
                    <optgroup label="Olahraga" class="font-semibold text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-slate-700 px-3 py-2 border-b border-gray-200 dark:border-slate-600">
                        <option value="basket" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Bola Basket (Putra/Putri)</option>
                        <option value="futsal" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Futsal</option>
                        <option disabled="" value="voli" class="pl-4 py-2 text-gray-400 cursor-not-allowed">Bola Voli (Kuota Penuh)</option>
                    </optgroup>
                    <optgroup label="Seni &amp; Kreatif" class="font-semibold text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-slate-700 px-3 py-2 border-b border-gray-200 dark:border-slate-600">
                        <option value="musik" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Seni Musik / Band</option>
                        <option value="tari" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Seni Tari Tradisional</option>
                        <option value="teater" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Teater &amp; Drama</option>
                    </optgroup>
                    <optgroup label="Teknologi" class="font-semibold text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-slate-700 px-3 py-2">
                        <option value="robotik" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Klub Robotika</option>
                        <option value="coding" class="pl-4 py-2 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">Coding &amp; Web Design</option>
                    </optgroup>
                </select>
                <!-- Custom Dropdown Arrow -->
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-500 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            <!-- Preview Info Card (Simulating selection of 'Bola Basket') -->
            <div
                class="mt-3 p-4 rounded-lg bg-blue-50/50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-800/50 flex flex-col sm:flex-row gap-4 sm:items-center justify-between animate-fade-in">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-white dark:bg-slate-700 p-2 rounded-lg border border-gray-100 dark:border-slate-600 shadow-sm">
                        <span class="material-symbols-outlined text-orange-500">sports_basketball</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-[#0d131c] dark:text-white">Bola Basket</p>
                        <p class="text-xs text-[#49699c]">Pembina: Pak Heru Susanto</p>
                    </div>
                </div>
                <div
                    class="flex gap-4 text-xs border-t sm:border-t-0 border-blue-100 dark:border-slate-700 pt-3 sm:pt-0">
                    <div class="flex items-center gap-1.5 text-gray-600 dark:text-gray-400">
                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                        <span>Selasa &amp; Jumat, 15:30</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-green-600 dark:text-green-400 font-medium">
                        <span class="material-symbols-outlined text-[16px]">group</span>
                        <span>12 Slot Tersisa</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reason Textarea -->
        <div class="space-y-2">
            <label class="block text-sm font-medium text-[#0d131c] dark:text-white" for="alasan">Alasan Bergabung
                <span class="text-red-500">*</span></label>
            <div class="relative">
                <textarea
                    class="block w-full rounded-lg border-[#ced8e8] dark:border-slate-600 bg-white dark:bg-slate-800 dark:text-white p-3 text-sm focus:border-primary focus:ring-primary shadow-sm"
                    id="alasan" placeholder="Jelaskan motivasi kamu mengikuti kegiatan ini..." rows="4"></textarea>
                <div
                    class="absolute bottom-3 right-3 text-xs text-gray-400 dark:text-gray-500 bg-white/80 dark:bg-slate-800/80 px-1 rounded">
                    0/50 karakter
                </div>
            </div>
            <p class="text-xs text-[#49699c]">Minimal 50 karakter agar pembina dapat menilai
                keseriusanmu.</p>
        </div>
        <!-- Experience Textarea -->
        <div class="space-y-2">
            <label class="block text-sm font-medium text-[#0d131c] dark:text-white" for="pengalaman">
                Pengalaman Terkait
                <span class="text-gray-400 font-normal ml-1">(Opsional)</span>
            </label>
            <textarea
                class="block w-full rounded-lg border-[#ced8e8] dark:border-slate-600 bg-white dark:bg-slate-800 dark:text-white p-3 text-sm focus:border-primary focus:ring-primary shadow-sm"
                id="pengalaman" placeholder="Pernah mengikuti lomba atau klub serupa sebelumnya? Ceritakan di sini." rows="3"></textarea>
        </div>
        <!-- Agreement Checkbox -->
        <div
            class="flex items-start gap-3 p-4 bg-gray-50 dark:bg-slate-800/50 rounded-lg border border-gray-100 dark:border-slate-700">
            <div class="flex h-5 items-center">
                <input class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" id="agreement"
                    type="checkbox" />
            </div>
            <div class="text-sm">
                <label class="font-medium text-[#0d131c] dark:text-white" for="agreement">Saya
                    menyetujui ketentuan ekstrakurikuler</label>
                <p class="text-gray-500 dark:text-slate-400 mt-1 text-xs">Saya bersedia mengikuti
                    jadwal latihan rutin dan mematuhi tata tertib yang berlaku di SMK N 1 Wonosobo.
                    Absensi di bawah 75% dapat mempengaruhi nilai rapor.</p>
            </div>
        </div>
        <hr class="border-[#e7ecf4] dark:border-slate-700" />
        <!-- Action Buttons -->
        <div class="flex flex-col-reverse sm:flex-row justify-end gap-3 sm:gap-4 pt-2">
            <button
                class="px-6 py-2.5 rounded-lg border border-[#ced8e8] dark:border-slate-600 text-gray-700 dark:text-slate-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors focus:ring-2 focus:ring-offset-2 focus:ring-gray-200"
                type="button">
                Reset Form
            </button>
            <!-- Use 'opacity-50 cursor-not-allowed' for disabled state -->
            <button
                class="group flex items-center justify-center gap-2 px-6 py-2.5 rounded-lg bg-primary text-white text-sm font-medium shadow-md hover:bg-blue-600 hover:shadow-lg transition-all focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                type="submit">
                <span>Daftar Sekarang</span>
                <span
                    class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </button>
        </div>
    </form>
</div>
