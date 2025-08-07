<!-- Modern Horizontal Navigation Bar -->
<nav style="
    background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    position: fixed;
    top: 80px;
    left: 0;
    right: 0;
    z-index: 999;
    border-bottom: 3px solid #0369a1;
">
    <div style="
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 2rem;
        height: 60px;
    ">
        <!-- Navigation Links -->
        <div style="
            display: flex;
            align-items: center;
            gap: 0;
        ">
            <a href="index.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-home" style="font-size: 1.1rem;"></i>
                <span>Home</span>
            </a>
            
            <a href="calon_penerima.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-users" style="font-size: 1.1rem;"></i>
                <span>Calon Penerima</span>
            </a>
            
            <a href="kriteria.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-bar-chart" style="font-size: 1.1rem;"></i>
                <span>Kriteria</span>
            </a>
            
            <a href="himpunan.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-bookmark" style="font-size: 1.1rem;"></i>
                <span>Nilai Kriteria</span>
            </a>
            
            <a href="klasifikasi.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-tags" style="font-size: 1.1rem;"></i>
                <span>Klasifikasi</span>
            </a>
            
            <a href="analisa.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 1rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                transition: all 0.3s ease;
                border-right: 1px solid rgba(255, 255, 255, 0.2);
                height: 60px;
                box-sizing: border-box;
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                <i class="fa fa-line-chart" style="font-size: 1.1rem;"></i>
                <span>Analisis</span>
            </a>
        </div>

        <!-- Logout Button -->
        <div>
            <a href="../index.php" style="
                display: flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.75rem 1.5rem;
                color: white;
                text-decoration: none;
                font-weight: 500;
                font-size: 0.95rem;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 0.5rem;
                transition: all 0.3s ease;
                border: 1px solid rgba(255, 255, 255, 0.2);
            " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='translateY(-2px)'" 
               onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(0)'">
                <i class="fa fa-sign-out" style="font-size: 1.1rem;"></i>
                <span>Keluar</span>
            </a>
        </div>
    </div>
</nav>

<!-- Add spacing for fixed navbar -->
<div style="height: 60px; margin-bottom: 2rem;"></div>

<script>
// Highlight active page
document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('nav a[href]');
    
    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href');
        if (linkPage === currentPage || (currentPage === '' && linkPage === 'index.php')) {
            link.style.background = 'rgba(255, 255, 255, 0.2)';
            link.style.borderBottom = '3px solid #fbbf24';
        }
    });
});
</script>

