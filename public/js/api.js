// public/js/api.js

// Định nghĩa hàm để gọi API từ tệp JSON OpenAPI
async function callApi(apiPath, method, requestData) {
    const apiUrl = 'https://provinces.open-api.vn/api'; // URL thực tế của API

    try {
      const response = await fetch(apiUrl + apiPath, {
        method,
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(requestData),
      });

      if (!response.ok) {
        throw new Error('Request failed');
      }

      const responseData = await response.json();
      return responseData;
    } catch (error) {
      console.error('API request error:', error);
      throw error;
    }
  }

  // Sử dụng hàm để lấy danh sách tỉnh và huyện
  async function getProvincesAndDistricts() {
    try {
      // Gọi API để lấy danh sách tỉnh
      const provinces = await callApi('/api/p/', 'GET');
      console.log('Danh sách tỉnh:', provinces);

      // Duyệt qua từng tỉnh và lấy danh sách huyện tương ứng
      for (const province of provinces) {
        // Gọi API để lấy danh sách huyện cho mỗi tỉnh
        const districts = await callApi(`/api/p/${province.code}`, 'GET', { depth: 2 });
        console.log(`Danh sách huyện của tỉnh ${province.name}:`, districts);
      }
    } catch (error) {
      console.error('API error:', error);
    }
  }

  // Gọi hàm để lấy danh sách tỉnh và huyện
  getProvincesAndDistricts();
