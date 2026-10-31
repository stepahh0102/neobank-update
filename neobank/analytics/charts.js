Chart.defaults.color = '#8b949e';
Chart.defaults.font.family = "'Segoe UI', Arial, sans-serif";

const ctxCompare = document.getElementById('compareChart').getContext('2d');
new Chart(ctxCompare, {
    type: 'bar',
    data: {
        labels: ['Всего', 'Старые', 'Новые', 'Регистрации'],
        datasets: [
            {
                label: 'Сентябрь 2026',
                data: [5320, 3570, 1750, 1420],
                backgroundColor: '#1f6feb', // Синий
                borderRadius: 6
            },
            {
                label: 'Октябрь 2026',
                data: [5950, 4060, 1890, 1680],
                backgroundColor: '#3fb950', // Зеленый
                borderRadius: 6
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'top',
                labels: { color: '#e6edf3' }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { color: '#30363d' }
            },
            x: {
                grid: { display: false }
            }
        }
    }
});

const ctxActivity = document.getElementById('activityChart').getContext('2d');
new Chart(ctxActivity, {
    type: 'line',
    data: {
        labels: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
        datasets: [
            {
                label: 'Активные сессии',
                data: [1200, 1900, 1500, 2100, 2400, 1800, 1100],
                borderColor: '#6f42c1', // Фиолетовый
                backgroundColor: 'rgba(111, 66, 193, 0.2)', // Полупрозрачный фиолетовый
                fill: true,
                tension: 0.4, // Изогнутая линия
                pointBackgroundColor: '#fff',
                pointBorderColor: '#6f42c1',
                pointRadius: 5
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: { color: '#30363d' }
            },
            x: {
                grid: { display: false }
            }
        }
    }
});