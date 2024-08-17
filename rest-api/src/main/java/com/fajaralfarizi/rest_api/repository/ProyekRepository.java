package com.fajaralfarizi.rest_api.repository;
import org.springframework.data.jpa.repository.JpaRepository;
import com.fajaralfarizi.rest_api.model.Proyek;

public interface ProyekRepository extends JpaRepository<Proyek, Long> {
    
}

