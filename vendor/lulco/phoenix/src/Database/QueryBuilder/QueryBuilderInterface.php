<?php

namespace Phoenix\Database\QueryBuilder;

use PDOStatement;
use Phoenix\Database\Element\MigrationTable;
use Phoenix\Database\Element\MigrationView;

interface QueryBuilderInterface
{
    /**
     * @param MigrationTable $table
     * @return string[] list of queries
     */
    public function createTable(MigrationTable $table): array;

    /**
     * @param MigrationTable $table
     * @return string[] list of queries
     */
    public function dropTable(MigrationTable $table): array;

    /**
     * @param MigrationTable $table
     * @return string[] list of queries
     */
    public function renameTable(MigrationTable $table): array;

    /**
     * @param MigrationTable $table
     * @return array<string|PDOStatement> list of queries
     */
    public function alterTable(MigrationTable $table): array;

    /**
     * @param MigrationTable $table
     * @return array<string|PDOStatement> list of queries
     */
    public function copyTable(MigrationTable $table): array;

    /**
     * @param MigrationTable $table
     * @return string[] list of queries
     */
    public function truncateTable(MigrationTable $table): array;

    /**
     * @param MigrationView $view
     * @return string[] list of queries
     */
    public function createView(MigrationView $view): array;

    /**
     * @param MigrationView $view
     * @return string[] list of queries
     */
    public function replaceView(MigrationView $view): array;

    /**
     * @param MigrationView $view
     * @return string[] list of queries
     */
    public function dropView(MigrationView $view): array;
    
    /**
     * @param string|null $string
     * @return string escaped string
     */
    public function escapeString(?string $string): string;
}
