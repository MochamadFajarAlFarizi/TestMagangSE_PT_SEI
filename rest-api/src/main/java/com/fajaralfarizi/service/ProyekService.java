package com.fajaralfarizi.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.fajaralfarizi.rest_api.model.Proyek;
import com.fajaralfarizi.rest_api.repository.ProyekRepository;

import java.util.List;
import java.util.Optional;

@Service
public class ProyekService {

    @Autowired
    private ProyekRepository proyekRepository;

    public List<Proyek> getAllProyek() {
        return proyekRepository.findAll();
    }

    public Optional<Proyek> getProyekById(Long id) {
        return proyekRepository.findById(id);
    }

    public Proyek saveProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public void deleteProyek(Long id) {
        proyekRepository.deleteById(id);
    }
}


