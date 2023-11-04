document.addEventListener('DOMContentLoaded', function() {
    const menuLinks = document.querySelectorAll('.listMenu');
    
    menuLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        // Hapus kelas 'text-indigo-600' (atau warna aktif yang Anda pilih) dari semua tautan menu
        menuLinks.forEach(link => {
          link.classList.remove('bg-gray-800 dark:text-gray-200');
        });
    
        // Tambahkan kelas 'text-indigo-600' hanya pada tautan yang diklik
        event.target.classList.add('bg-gray-800 dark:text-gray-200');
      });
    });
  });
  